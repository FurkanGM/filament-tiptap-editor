<div x-show="buttons.includes('strike')"
    style="display: none;">
    <x-filament-tiptap-editor::button action="editor().chain().focus().toggleStrike().run()"
        active="'strike'"
        label="Strike">
        <x-filament-tiptap-editor::icon icon="strike" />
    </x-filament-tiptap-editor::button>
</div>
