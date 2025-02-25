@props([
    'fieldId' => null,
])
<div x-show="buttons.includes('youtube')"
    style="display: none;">
    <x-filament-tiptap-editor::button action="openModal()"
        active="'youtube'"
        x-on:insert-youtube.window="$event.detail.fieldId === '{{ $fieldId }}' ? insertVideo($event.detail.video) : null"
        label="{{ __('filament-tiptap-editor::editor.video.youtube') }}"
        x-data="{
            openModal() {
                    $dispatch('open-modal', {
                        id: 'filament-tiptap-editor-youtube-modal',
                        fieldId: '{{ $fieldId }}',
                    });
                },
                insertVideo(video) {
                    if (video.url === null) {
                        return;
                    }
        
                    this.editor()
                        .chain()
                        .focus()
                        .setYoutubeVideo({
                            src: video.url,
                            width: video.width ?? 640,
                            height: video.height ?? 480,
                            responsive: video.responsive ?? true,
                        })
                        .run();
                }
        }">
        <x-filament-tiptap-editor::icon icon="youtube" />
    </x-filament-tiptap-editor::button>
</div>
