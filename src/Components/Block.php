<?php

namespace FilamentTiptapEditor\Components;

use Closure;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Concerns;
use Illuminate\Support\Str;
use ReflectionClass;

class Block
{
    protected string $name = '';

    protected string $view = 'filament-tiptap-editor::components.block';

    protected string | Closure | null $icon = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function getLabel(): string
    {
        return (string) Str::of($this->getName())
            ->kebab()
            ->replace(['-', '_'], ' ')
            ->ucfirst();
    }

    public function getFields(): array
    {
        return array_map(function ($field) {
            return $field->getName();
        }, $this->getFormSchema());
    }
}
