<?php

namespace FilamentTiptapEditor\Components;

use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class BlockModal extends Component implements HasForms
{
    use InteractsWithForms;

    public $data;
    public ?string $fieldId = null;
    public ?string $currentForm = '';

    public function mount()
    {
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    protected function getFormSchema(?Block $block = null): array
    {
        if (!$block) return [];

        return array_merge(
            [
                Hidden::make('type')->default($block->getName()),
            ],
            $block->getFormSchema()
        );
    }

    protected function getForms(): array
    {
        $forms = [];

        foreach ($this->blocks as $block) {
            $forms[$block->getName()] = $this->makeForm()->schema($this->getFormSchema($block));
        }

        return $forms;
    }

    public function setBlock(?string $block)
    {
        ray($this->blocks);
        // if ($block) {
        //     $block = $this->getBlock($block);
        //     $this->currentForm = $block->getName();
        //     $this->data = null;
        //     $this->{$this->currentForm}->fill([]);
        // }
    }

    public function editBlock(?string $block, ?string $data)
    {
        if ($block && $data) {
            $block = $this->getBlock($block);
            $this->data = (array) json_decode(urldecode($data));
            $this->currentForm = $block->getName();
            $this->{$this->currentForm}->fill((array) json_decode(urldecode($data)));
        }
    }

    public function resetForm(): void
    {
        $this->data = null;
        $this->{$this->currentForm}->fill();
        $this->resetErrorBag();
    }

    public function create(): void
    {
        $rawData = $this->{$this->currentForm}->getState();
        $data = [
            'type' => $rawData['type'],
            'attributes' => Arr::except($rawData, 'type'),
        ];
        $this->dispatchBrowserEvent('close-modal', ['id' => 'filament-tiptap-editor-block-modal']);
        $this->dispatchBrowserEvent('insert-block', ['id' => 'filament-tiptap-editor-block-modal', 'fieldId' => $this->fieldId, 'data' => $data]);
    }

    public function render(): View
    {
        return view('filament-tiptap-editor::components.block-modal-blocks');
    }
}
