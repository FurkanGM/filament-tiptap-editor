<x-forms::field-wrapper :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :required="$isRequired()"
    :state-path="$getStatePath()">
    <div @class([
        'tiptap-editor border rounded-md relative bg-white',
        'dark:bg-gray-700' => config('filament.dark_mode'),
        'border-gray-200' => !$errors->has($getStatePath()),
        'dark:border-gray-600' =>
            config('filament.dark_mode') && !$errors->has($getStatePath()),
        'border-danger-600 ring-danger-600' => $errors->has($getStatePath()),
    ])>
        <textarea x-ref="textarea"
            class="absolute inset-0"
            style="display: none;"
            @if (!$isConcealed()) {!! filled($length = $getMaxLength()) ? "maxlength=\"{$length}\"" : null !!}
                {!! filled($length = $getMinLength()) ? "minlength=\"{$length}\"" : null !!} {!! $isRequired() ? 'required' : null !!} @endif
            {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"></textarea>
        <div wire:ignore
            class="relative z-0 tiptap-wrapper"
            x-bind:class="{ 'tiptap-fullscreen': fullScreenMode }"
            x-data="tiptap({ state: $wire.entangle('{{ $getStatePath() }}').defer, buttons: '{{ $getButtons() }}', blocks: {{ $hasBlocks() }} })"
            x-on:keydown.escape="fullScreenMode = false"
            x-id="['dropdown-button']">
            <div @class([
                'tiptap-toolbar border-b border-gray-200 bg-gray-100 divide-x divide-gray-300 rounded-t-md shadow z-10 relative flex flex-col md:flex-row',
                'dark:border-gray-900 dark:bg-gray-900 dark:divide-gray-700' => config(
                    'filament.dark_mode'
                ),
            ])>
                <div class="flex flex-wrap items-center flex-1 gap-1 p-1 tiptap-toolbar-left">
                    <<<<<<< HEAD
                        <div
                        x-show="buttons.includes('bold')"
                        style="display: none;">
                        <x-filament-tiptap-editor::buttons.bold />
                </div>
                <div x-show="buttons.includes('italic')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.italic />
                </div>
                <div x-show="buttons.includes('strike')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.strike />
                </div>
                <div x-show="buttons.includes('underline')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.underline />
                </div>
                <div x-show="buttons.includes('h1')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.heading level="1" />
                </div>
                <div x-show="buttons.includes('h2')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.heading level="2" />
                </div>
                <div x-show="buttons.includes('h3')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.heading level="3" />
                </div>
                <div x-show="buttons.includes('h4')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.heading level="4" />
                </div>
                <div x-show="buttons.includes('h5')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.heading level="5" />
                </div>
                <div x-show="buttons.includes('h6')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.heading level="6" />
                </div>
                <div x-show="buttons.includes('lead')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.lead />
                </div>
                <div x-show="buttons.includes('color')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.color />
                </div>
                <div x-show="buttons.includes('bulletList')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.list />
                </div>
                <div x-show="buttons.includes('orderedList')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.list type="ol" />
                </div>
                <div x-show="buttons.includes('checkedList')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.checkedlist />
                </div>
                <div x-show="buttons.includes('align')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.align-left />
                </div>
                <div x-show="buttons.includes('align')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.align-center />
                </div>
                <div x-show="buttons.includes('align')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.align-right />
                </div>
                <div x-show="buttons.includes('blockquote')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.blockquote />
                </div>
                <div x-show="buttons.includes('hr')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.hr />
                </div>
                <div x-show="buttons.includes('link')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.link fieldId="{{ $getStatePath() }}" />
                </div>
                <div x-show="buttons.includes('superscript')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.superscript />
                </div>
                <div x-show="buttons.includes('subscript')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.subscript />
                </div>
                <div x-show="buttons.includes('table')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.table />
                </div>
                <div x-show="buttons.includes('media')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.media fieldId="{{ $getStatePath() }}" />
                </div>
                {{-- <div x-show="buttons.includes('embed')"
                        style="display: none;">
                        <x-filament-tiptap-editor::buttons.embed fieldId="{{ $getStatePath() }}" />
                    </div> --}}
                <div x-show="buttons.includes('code')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.code />
                </div>
                <div x-show="buttons.includes('codeblock')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.code-block />
                </div>
                <div x-show="buttons.includes('source')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.source fieldId="{{ $getStatePath() }}" />
                </div>
                <div x-show="blocks"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.blocks fieldId="{{ $getStatePath() }}"
                        :blocks="$getBlocks()" />
                </div>
                <div x-show="buttons.includes('color')"
                    style="display: none;">
                    <x-filament-tiptap-editor::buttons.remove-color />
                </div>
                =======
                <x-filament-tiptap-editor::buttons.bold />
                <x-filament-tiptap-editor::buttons.italic />
                <x-filament-tiptap-editor::buttons.strike />
                <x-filament-tiptap-editor::buttons.underline />
                <x-filament-tiptap-editor::buttons.heading />
                <x-filament-tiptap-editor::buttons.lead />
                <x-filament-tiptap-editor::buttons.small />
                <x-filament-tiptap-editor::buttons.color />
                <x-filament-tiptap-editor::buttons.list />
                <x-filament-tiptap-editor::buttons.align-left />
                <x-filament-tiptap-editor::buttons.align-center />
                <x-filament-tiptap-editor::buttons.align-right />
                <x-filament-tiptap-editor::buttons.blockquote />
                <x-filament-tiptap-editor::buttons.hr />
                <x-filament-tiptap-editor::buttons.link fieldId="{{ $getStatePath() }}" />
                <x-filament-tiptap-editor::buttons.superscript />
                <x-filament-tiptap-editor::buttons.subscript />
                <x-filament-tiptap-editor::buttons.table />
                <x-filament-tiptap-editor::buttons.media fieldId="{{ $getStatePath() }}" />
                <x-filament-tiptap-editor::buttons.code />
                <x-filament-tiptap-editor::buttons.code-block />
                <x-filament-tiptap-editor::buttons.source fieldId="{{ $getStatePath() }}" />
                <x-filament-tiptap-editor::buttons.remove-color />
                >>>>>>> main
            </div>
            <div class="flex flex-wrap items-center self-stretch gap-1 p-1 pl-2 tiptap-toolbar-right">
                <x-filament-tiptap-editor::buttons.undo />
                <x-filament-tiptap-editor::buttons.redo />
                <x-filament-tiptap-editor::buttons.erase />
                <x-filament-tiptap-editor::buttons.fullscreen />
            </div>
        </div>

        <div @class([
            'tiptap-content max-h-[40rem] h-auto overflow-scroll rounded-b-md bg-gray-50 dark:bg-gray-700',
        ])
            x-ref="element"></div>
    </div>
    </div>

    @if (config('filament-tiptap-editor.media_uploader_id') == 'filament-tiptap-editor-media-uploader-modal')
        @once
            @push('modals')
                @livewire('filament-tiptap-editor-media-uploader-modal')
            @endpush
        @endonce
    @endif

    @once
        @push('modals')
            @livewire('filament-tiptap-editor-link-modal')
            @livewire('filament-tiptap-editor-source-modal')
        @endpush
    @endonce
</x-forms::field-wrapper>
