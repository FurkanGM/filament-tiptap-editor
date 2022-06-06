<?php

namespace FilamentTiptapEditor\Components;

use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class BlockForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $data;
    public $formSchema = [];

    public function mount($formSchema)
    {
        $this->formSchema = $formSchema;

        $this->form->fill([]);
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    protected function getFormSchema(): array
    {
        return $this->formSchema;
    }

    public function save()
    {
        $this->data = null;
        $this->form->fill([]);
    }

    public function render()
    {
        return view('filament-tiptap-editor::components.block-form');
    }
}
