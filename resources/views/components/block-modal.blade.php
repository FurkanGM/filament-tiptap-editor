<x-filament-support::modal id="filament-tiptap-editor-block-modal"
    heading="{{ __('Insert Block') }}"
    width="md"
    :dark-mode="config('filament.dark_mode')"
    x-data="{
        toggleOpen(event) {
            $wire.set('fieldId', event.detail.fieldId);
            $wire.getBlock(event.detail.block.name);
            this.$nextTick(() => {
                if (this.isOpen === true && this.$el.querySelector('input')) {
                    this.$el.querySelector('input').focus();
                }
            });
        }
    }"
    x-on:close-modal.window="toggleOpen($event)"
    x-on:open-modal.window="toggleOpen($event)"
    class="filament-tiptap-editor-block-modal">

    {{ $data }}

    {{-- <form wire:submit.prevent="create">
        {{ $this->form }}

        <div class="flex items-center gap-4 pt-3 mt-3 border-t border-gray-300 dark:border-gray-700">
            <div class="flex items-center gap-2 ml-auto">
                <x-filament::button type="button"
                    x-on:click="isOpen = false; $wire.resetForm();"
                    color="secondary">
                    {{ __('Cancel') }}
                </x-filament::button>
                <x-filament::button type="submit">
                    {{ __('Insert') }}
                </x-filament::button>
            </div>
        </div>
    </form> --}}

</x-filament-support::modal>
