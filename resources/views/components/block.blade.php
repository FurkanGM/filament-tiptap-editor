<div {{ $attributes->merge($getExtraAttributes())->class(['py-8 filament-tiptap-editor-block']) }}>
    <form wire:submit.prevent="create">
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
    </form>
</div>
