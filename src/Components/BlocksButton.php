<?php

namespace FilamentTiptapEditor\Components;

use ReflectionClass;
use Livewire\Component;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Filament\Pages\Actions\Action;
use Illuminate\Support\Collection;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Concerns\InteractsWithForms;

class BlocksButton extends Component
{
    public $data;
    public ?string $fieldId = null;
    private array $blocks = [];
    public array $blockLabels = [];

    public function mount($blocks)
    {
        $this->blocks = $blocks;
        $this->blockLabels = collect($blocks)->transform(function ($block) {
            return [
                'name' => $block->getName(),
                'label' => $block->getLabel(),
                'resolve' => '\\\\' . str_replace('\\', '\\\\', get_class($block)),
            ];
        })->toArray();
    }

    public function resetForm(): void
    {
        $this->resetErrorBag();
    }

    public function removeBlock(): void
    {
        $this->resetForm();
        $this->dispatchBrowserEvent('remove-block', ['id' => 'filament-tiptap-editor-block-modal', 'fieldId' => $this->fieldId]);
    }

    public function create(): void
    {
        $this->dispatchBrowserEvent('close-modal', ['id' => 'filament-tiptap-editor-block-modal']);
        $this->dispatchBrowserEvent('insert-block', ['id' => 'filament-tiptap-editor-block-modal', 'fieldId' => $this->fieldId]);
    }

    public function getBlock(string $classname)
    {
        $class = new ReflectionClass($classname);
        $block = $class->newInstanceWithoutConstructor();
        ray($block);
        // $this->dispatchBrowserEvent('open-modal', ['id' => 'filament-tiptap-editor-block-modal', 'fieldId' => $this->fieldId]);
        // ray($this->blocks[$index]->getFormSchema());
        // return $this->blocksData->where('name', $name)->first();
    }

    public function getBlockLabels()
    {
        return $this->blockLabels;
    }

    public function render()
    {
        return view('filament-tiptap-editor::components.buttons.blocks');
    }
}
