<div x-show="buttons.includes('align')"
    style="display: none;">
    <x-filament-tiptap-editor::button action="editor().chain().focus().setTextAlign('center').run()"
        active="{ textAlign: 'center' }"
        label="Align Text Center">
        <x-filament-tiptap-editor::icon icon="align-center" />
    </x-filament-tiptap-editor::button>
</div>
