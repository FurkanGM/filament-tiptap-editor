@props([
    'blocks' => [],
])
<x-filament-support::modal id="filament-tiptap-editor-block-modal"
    width="md"
    :dark-mode="config('filament.dark_mode')"
    x-data="{
        type: null,
        toggleOpen(event) {
            this.type = event.detail.type;
            {{-- $wire.set('fieldId', event.detail.fieldId);
            if (event.detail.action !== 'edit') {
                $wire.setBlock(event.detail.type);
            } else {
                $wire.editBlock(event.detail.type, event.detail.data);
            }
            this.$nextTick(() => {
                if (this.isOpen === true && this.$el.querySelector('input')) {
                    this.$el.querySelector('input').focus();
                }
            }); --}}
        }
    }"
    x-on:open-modal.window="toggleOpen($event)"
    class="filament-tiptap-editor-block-modal">

    @foreach ($blocks as $block)
        <div x-show="type == '{{ $block->getName() }}'"
            style="display: none;">
            {{ $block }}
        </div>
    @endforeach

</x-filament-support::modal>
