<form wire:submit.prevent="save">

    {{ $this->form }}

    <div class="flex items-center gap-4 pt-3 mt-3 border-t border-gray-300 dark:border-gray-700">
        <div class="flex items-center gap-2 ml-auto">
            <x-filament::button type="button"
                color="secondary">
                {{ __('Cancel') }}
            </x-filament::button>
            <x-filament::button type="submit">
                {{ __('Insert') }}
            </x-filament::button>
        </div>
    </div>
</form>
