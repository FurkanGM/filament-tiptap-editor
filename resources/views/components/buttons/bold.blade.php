<div x-show="buttons.includes('bold')"
    style="display: none;">
    <x-filament-tiptap-editor::button action="editor().chain().focus().toggleBold().run()"
        active="'bold'"
        label="{{ __('filament-tiptap-editor::editor.bold') }}">
        <x-filament-tiptap-editor::icon icon="bold" />
    </x-filament-tiptap-editor::button>
</div>
