<?php

namespace FilamentTiptapEditor;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Filament\Forms\Components\Field;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Support\Concerns\HasExtraAlpineAttributes;
use Filament\Forms\Components\Concerns\CanBeLengthConstrained;
use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Contracts\CanBeLengthConstrained as CanBeLengthConstrainedContract;
use FilamentTiptapEditor\Components\Block;

class TiptapEditor extends Field implements CanBeLengthConstrainedContract
{
    use CanBeLengthConstrained;
    use HasExtraInputAttributes;
    use HasExtraAlpineAttributes;

    protected string $view = 'filament-tiptap-editor::tiptap-editor';

    protected ?Closure $saveUploadedFileUsing = null;

    public string $profile = 'default';

    public array $blocks = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->default([]);

        $this->profile = collect(config('filament-tiptap-editor.profiles.default'))->implode(',');

        $this->afterStateHydrated(static function (TiptapEditor $component, ?array $state): void {
            ray($state);
            $items = collect($state ?? [])
                ->mapWithKeys(static fn ($itemData) => [(string) Str::uuid() => $itemData])
                ->toArray();

            $component->state($items);
        });

        $this->registerListeners([
            'tiptapeditor::createItem' => [
                function (TiptapEditor $component, string $statePath, string $block, ?string $afterUuid = null): void {
                    ray('create item');
                    if ($statePath !== $component->getStatePath()) {
                        return;
                    }

                    $livewire = $component->getLivewire();

                    $newUuid = (string) Str::uuid();
                    $newItem = [
                        'type' => $block,
                        'data' => [],
                    ];

                    if ($afterUuid) {
                        $newItems = [];

                        foreach ($component->getState() as $uuid => $item) {
                            $newItems[$uuid] = $item;

                            if ($uuid === $afterUuid) {
                                $newItems[$newUuid] = $newItem;
                            }
                        }

                        data_set($livewire, $statePath, $newItems);
                    } else {
                        data_set($livewire, "{$statePath}.{$newUuid}", $newItem);
                    }

                    $component->getChildComponentContainers()[$newUuid]->fill();

                    $component->hydrateDefaultItemState($newUuid);

                    $component->collapsed(false, shouldMakeComponentCollapsible: false);
                },
            ],
            'tiptapeditor::deleteItem' => [
                function (TiptapEditor $component, string $statePath, string $uuidToDelete): void {
                    if ($component->isItemDeletionDisabled()) {
                        return;
                    }

                    if ($statePath !== $component->getStatePath()) {
                        return;
                    }

                    $items = $component->getState();

                    unset($items[$uuidToDelete]);

                    $livewire = $component->getLivewire();
                    data_set($livewire, $statePath, $items);
                },
            ],
        ]);
    }

    public function profile(?string $profile)
    {
        $this->profile = collect(config('filament-tiptap-editor.profiles.' . $profile))->implode(',');

        return $this;
    }

    public function getButtons()
    {
        return $this->profile;
    }

    public function blocks(array $blocks): static
    {
        $this->childComponents($blocks);

        return $this;
    }

    public function getBlock($name): ?Block
    {
        return Arr::first(
            $this->getBlocks(),
            fn (Block $block) => $block->getName() === $name,
        );
    }

    public function getBlocks(): array
    {
        return $this->getChildComponentContainer()->getComponents();
    }

    public function getChildComponentContainers(bool $withHidden = false): array
    {
        if (isset($this->getState()['content'])) {
            return collect($this->getState()['content'])
                ->filter(fn (array $itemData): bool => $this->hasBlock($itemData['type']))
                ->map(
                    fn (array $itemData, $itemIndex): ComponentContainer => $this
                        ->getBlock($itemData['type'])
                        ->getChildComponentContainer()
                        ->getClone()
                        ->statePath("{$itemIndex}.data")
                        ->inlineLabel(false),
                )
                ->toArray();
        }

        return [];
    }

    public function hasBlock($name): bool
    {
        return (bool) $this->getBlock($name);
    }

    public function hasBlocks()
    {
        return $this->getBlocks() ? 'true' : 'false';
    }

    public function saveUploadedFileUsing(?Closure $callback): static
    {
        $this->saveUploadedFileUsing = $callback;

        return $this;
    }

    public function saveUploadedFiles(): void
    {
        if (blank($this->getState())) {
            $this->state([]);

            return;
        }

        if (!is_array($this->getState())) {
            $this->state([$this->getState()]);
        }

        $state = array_map(function (TemporaryUploadedFile | string $file) {
            if (!$file instanceof TemporaryUploadedFile) {
                return $file;
            }

            $callback = $this->saveUploadedFileUsing;

            if (!$callback) {
                $file->delete();

                return $file;
            }

            $storedFile = $this->evaluate($callback, [
                'file' => $file,
            ]);

            $file->delete();

            return $storedFile;
        }, $this->getState());

        if ($this->canReorder && ($callback = $this->reorderUploadedFilesUsing)) {
            $state = $this->evaluate($callback, [
                'state' => $state,
            ]);
        }

        $this->state($state);
    }
}
