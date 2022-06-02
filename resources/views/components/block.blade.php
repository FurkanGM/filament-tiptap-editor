<div {{ $attributes->merge($getExtraAttributes())->class(['filament-forms-builder-component-block']) }}
    x-data="{
        submitBlock(event) {
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
    }">

    <div @class([
        'p-4 space-y-2 text-center',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        <x-filament-support::modal.heading :attributes="\Filament\Support\prepare_inherited_attributes($attributes)"
            :dark-mode="config('forms.dark_mode')">
            {{ __('Insert ":label" Block', ['label' => $getLabel()]) }}
        </x-filament-support::modal.heading>
    </div>

    <livewire:filament-tiptap-editor-block-form :formSchema="$getChildComponents()" />
</div>
