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

    public function render()
    {
        return view('filament-tiptap-editor::components.buttons.blocks');
    }
}
