@props([
    'fieldId' => null,
    'blocks' => [],
])
<div x-show="blocks"
    style="display: none;">
    <x-filament-tiptap-editor::dropdown-button label="Blocks"
        icon="blocks"
        viewbox="0 0 36 36"
        x-on:insert-block.window="$event.detail.fieldId === '{{ $fieldId }}' ? editor().chain().focus().setBlock($event.detail.attributes).run() : null">
        @foreach ($blocks as $block)
            <x-filament-tiptap-editor::dropdown-button-item
                wire:click.prevent="dispatchFormEvent('tiptapeditor::createItem', '{{ $fieldId }}', '{{ $block->getName() }}')">
                {{ $block->getLabel() }}
            </x-filament-tiptap-editor::dropdown-button-item>
        @endforeach
    </x-filament-tiptap-editor::dropdown-button>
</div>
@if ($blocks)
    @once
        @push('modals')
            {{-- @livewire('filament-tiptap-editor-block-modal') --}}
            {{-- <x-filament-tiptap-editor::block-modal :blocks="$blocks" /> --}}
        @endpush
    @endonce
@endif
