<x-filament-support::modal id="filament-tiptap-editor-block-modal"
    heading="{{ __('Insert Block') }}"
    width="md"
    :dark-mode="config('filament.dark_mode')"
    x-data="{
        toggleOpen(event) {
            $wire.set('fieldId', event.detail.fieldId);
            if (event.detail.action !== 'edit') {
                $wire.setBlock(event.detail.type);
            } else {
                $wire.editBlock(event.detail.type, event.detail.data);
            }
            this.$nextTick(() => {
                if (this.isOpen === true && this.$el.querySelector('input')) {
                    this.$el.querySelector('input').focus();
                }
            });
        }
    }"
    x-on:open-modal.window="toggleOpen($event)"
    class="filament-tiptap-editor-block-modal">

    <form wire:submit.prevent="create">
        <div>
            {{ $this->{$currentForm} }}
        </div>

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
    </form>

</x-filament-support::modal>
