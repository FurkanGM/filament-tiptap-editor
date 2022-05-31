<?php

namespace FilamentTiptapEditor\Components;

use Livewire\Component;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
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

class BlockModal extends Component
{
    public $data;
    public ?string $fieldId = null;

    public function mount()
    {
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
        $link = $this->form->getState();
        $this->dispatchBrowserEvent('close-modal', ['id' => 'filament-tiptap-editor-block-modal']);
        $this->dispatchBrowserEvent('insert-block', ['id' => 'filament-tiptap-editor-block-modal', 'fieldId' => $this->fieldId]);
    }

    public function render()
    {
        return view('filament-tiptap-editor::components.block-modal');
    }
}
