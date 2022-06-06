@props([
    'icon' => null,
    'viewbox' => '0 0 24 24',
])
<svg xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    aria-hidden="true"
    role="img"
    class="w-5 h-5 iconify iconify--ic"
    width="24"
    height="24"
    preserveAspectRatio="xMidYMid meet"
    viewBox="{{ $viewbox }}">
    @switch($icon)
        @case('align-center')
            <path fill="currentColor"
                d="M7 16c0 .55.45 1 1 1h8c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1zm-3 5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-8h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm3-5c0 .55.45 1 1 1h8c.55 0 1-.45 1-1s-.45-1-1-1H8c-.55 0-1 .45-1 1zM3 4c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z">
            </path>
        @break

        @case('align-left')
            <path fill="currentColor"
                d="M14 15H4c-.55 0-1 .45-1 1s.45 1 1 1h10c.55 0 1-.45 1-1s-.45-1-1-1zm0-8H4c-.55 0-1 .45-1 1s.45 1 1 1h10c.55 0 1-.45 1-1s-.45-1-1-1zM4 13h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0 8h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 4c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z">
            </path>
        @break

        @case('align-right')
            <path fill="currentColor"
                d="M4 21h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm6-4h10c.55 0 1-.45 1-1s-.45-1-1-1H10c-.55 0-1 .45-1 1s.45 1 1 1zm-6-4h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm6-4h10c.55 0 1-.45 1-1s-.45-1-1-1H10c-.55 0-1 .45-1 1s.45 1 1 1zM3 4c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z">
            </path>
        @break

        @case('blocks')
            <path fill="currentColor"
                d="m31.42 9.09l-13-6a1 1 0 0 0-.84 0l-13 6A1 1 0 0 0 4 10v17a1 1 0 0 0 .58.91l13 6a1 1 0 0 0 .84 0l13-6A1 1 0 0 0 32 27V10a1 1 0 0 0-.58-.91ZM18 5.1L28.61 10L18 14.9L7.39 10ZM6 11.56l11 5.08v14.8L6 26.36Zm13 19.88v-14.8l11-5.08v14.8Z"
                class="clr-i-outline clr-i-outline-path-1"></path>
            <path fill="none"
                d="M0 0h36v36H0z"></path>
        @break

        @case('blockquote')
            <path fill="currentColor"
                d="M7.17 17c.51 0 .98-.29 1.2-.74l1.42-2.84c.14-.28.21-.58.21-.89V8c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h2l-1.03 2.06c-.45.89.2 1.94 1.2 1.94zm10 0c.51 0 .98-.29 1.2-.74l1.42-2.84c.14-.28.21-.58.21-.89V8c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h2l-1.03 2.06c-.45.89.2 1.94 1.2 1.94z">
            </path>
        @break

        @case('bold')
            <path fill="currentColor"
                d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79c0-2.26-1.75-4-4-4H8c-.55 0-1 .45-1 1v12c0 .55.45 1 1 1h5.78c2.07 0 3.96-1.69 3.97-3.77c.01-1.53-.85-2.84-2.15-3.44zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z">
            </path>
        @break

        @case('code-block')
            <path fill="currentColor"
                d="M5 3h2v2H5v5a2 2 0 0 1-2 2a2 2 0 0 1 2 2v5h2v2H5c-1.07-.27-2-.9-2-2v-4a2 2 0 0 0-2-2H0v-2h1a2 2 0 0 0 2-2V5a2 2 0 0 1 2-2m14 0a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h1v2h-1a2 2 0 0 0-2 2v4a2 2 0 0 1-2 2h-2v-2h2v-5a2 2 0 0 1 2-2a2 2 0 0 1-2-2V5h-2V3h2m-7 12a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m-4 0a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m8 0a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1Z">
            </path>
        @break

        @case('code')
            <path fill="currentColor"
                d="m16 18l-1.425-1.425l4.6-4.6L14.6 7.4L16 6l6 6Zm-8 0l-6-6l6-6l1.425 1.425l-4.6 4.6L9.4 16.6Z">
            </path>
        @break

        @case('details')
            <path fill="currentColor"
                d="M32 6H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm0 22H4V8h28Z"></path>
            <path fill="currentColor"
                d="M9 14h18a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2Z"></path>
            <path fill="currentColor"
                d="M9 18h18a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2Z"></path>
            <path fill="currentColor"
                d="M9 22h10a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2Z"></path>
            <path fill="none"
                d="M0 0h36v36H0z"></path>
        @break

        @case('erase')
            <path fill="currentColor"
                d="m16.24 3.56l4.95 4.94c.78.79.78 2.05 0 2.84L12 20.53a4.008 4.008 0 0 1-5.66 0L2.81 17c-.78-.79-.78-2.05 0-2.84l10.6-10.6c.79-.78 2.05-.78 2.83 0M4.22 15.58l3.54 3.53c.78.79 2.04.79 2.83 0l3.53-3.53l-4.95-4.95l-4.95 4.95Z">
            </path>
        @break

        @case('fullscreen-exit')
            <path fill="currentColor"
                d="M6 16h2v2c0 .55.45 1 1 1s1-.45 1-1v-3c0-.55-.45-1-1-1H6c-.55 0-1 .45-1 1s.45 1 1 1zm2-8H6c-.55 0-1 .45-1 1s.45 1 1 1h3c.55 0 1-.45 1-1V6c0-.55-.45-1-1-1s-1 .45-1 1v2zm7 11c.55 0 1-.45 1-1v-2h2c.55 0 1-.45 1-1s-.45-1-1-1h-3c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1zm1-11V6c0-.55-.45-1-1-1s-1 .45-1 1v3c0 .55.45 1 1 1h3c.55 0 1-.45 1-1s-.45-1-1-1h-2z">
            </path>
        @break

        @case('fullscreen-enter')
            <path fill="currentColor"
                d="M6 14c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3c.55 0 1-.45 1-1s-.45-1-1-1H7v-2c0-.55-.45-1-1-1zm0-4c.55 0 1-.45 1-1V7h2c.55 0 1-.45 1-1s-.45-1-1-1H6c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1zm11 7h-2c-.55 0-1 .45-1 1s.45 1 1 1h3c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1s-1 .45-1 1v2zM14 6c0 .55.45 1 1 1h2v2c0 .55.45 1 1 1s1-.45 1-1V6c0-.55-.45-1-1-1h-3c-.55 0-1 .45-1 1z">
            </path>
        @break

        @case('heading')
            <path fill="currentColor"
                d="M16 11V4h2v16h-2v-7H8v7H6V4h2v7h8Z"></path>
        @break

        @case('hr')
            <path fill="currentColor"
                fill-rule="evenodd"
                d="M19 13H5c-.55 0-1-.45-1-1s.45-1 1-1h14c.55 0 1 .45 1 1s-.45 1-1 1z"></path>
        @break

        @case('italic')
            <path fill="currentColor"
                d="M10 5.5c0 .83.67 1.5 1.5 1.5h.71l-3.42 8H7.5c-.83 0-1.5.67-1.5 1.5S6.67 18 7.5 18h5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5h-.71l3.42-8h1.29c.83 0 1.5-.67 1.5-1.5S17.33 4 16.5 4h-5c-.83 0-1.5.67-1.5 1.5z">
            </path>
        @break

        @case('lead')
            <path fill="currentColor"
                d="M5.12 14L7.5 7.67L9.87 14M6.5 5L1 19h2.25l1.12-3h6.25l1.13 3H14L8.5 5h-2M18 7l-5 5.07l1.41 1.43L17 10.9V17h2v-6.1l2.59 2.6L23 12.07L18 7Z">
            </path>
        @break

        @case('link')
            <path fill="currentColor"
                d="M17 7h-3c-.55 0-1 .45-1 1s.45 1 1 1h3c1.65 0 3 1.35 3 3s-1.35 3-3 3h-3c-.55 0-1 .45-1 1s.45 1 1 1h3c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-9 5c0 .55.45 1 1 1h6c.55 0 1-.45 1-1s-.45-1-1-1H9c-.55 0-1 .45-1 1zm2 3H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h3c.55 0 1-.45 1-1s-.45-1-1-1H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h3c.55 0 1-.45 1-1s-.45-1-1-1z">
            </path>
        @break

        @case('checkedlist')
            <path fill="currentColor"
                d="M22 7h-9v2h9V7zm0 8h-9v2h9v-2zM5.54 11L2 7.46l1.41-1.41l2.12 2.12l4.24-4.24l1.41 1.41L5.54 11zm0 8L2 15.46l1.41-1.41l2.12 2.12l4.24-4.24l1.41 1.41L5.54 19z">
            </path>
        @break

        @case('orderedlist')
            <path fill="currentColor"
                d="M2 17h2v.5H3v1h1v.5H2v1h3v-4H2v1zm1-9h1V4H2v1h1v3zm-1 3h1.8L2 13.1v.9h3v-1H3.2L5 10.9V10H2v1zm5-6v2h14V5H7zm0 14h14v-2H7v2zm0-6h14v-2H7v2z">
            </path>
        @break

        @case('bulletlist')
            <path fill="currentColor"
                d="M4 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5s1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5zm0-6c-.83 0-1.5.67-1.5 1.5S3.17 7.5 4 7.5S5.5 6.83 5.5 6S4.83 4.5 4 4.5zm0 12c-.83 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5s1.5-.68 1.5-1.5s-.67-1.5-1.5-1.5zM7 19h14v-2H7v2zm0-6h14v-2H7v2zm0-8v2h14V5H7z">
            </path>
        @break

        @case('media')
            <path fill="currentColor"
                d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-4.86 8.86l-3 3.87L9 13.14L6 17h12l-3.86-5.14z">
            </path>
        @break

        @case('redo')
            <path fill="currentColor"
                d="M18.4 10.6C16.55 8.99 14.15 8 11.5 8c-4.16 0-7.74 2.42-9.44 5.93c-.32.67.04 1.47.75 1.71c.59.2 1.23-.08 1.5-.64c1.3-2.66 4.03-4.5 7.19-4.5c1.95 0 3.73.72 5.12 1.88l-1.91 1.91c-.63.63-.19 1.71.7 1.71H21c.55 0 1-.45 1-1V9.41c0-.89-1.08-1.34-1.71-.71l-1.89 1.9z">
            </path>
        @break

        @case('remove-color')
            <g fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2">
                <path
                    d="M7.934 3.97A8.993 8.993 0 0 1 12 3c4.97 0 9 3.582 9 8c0 1.06-.474 2.078-1.318 2.828a4.515 4.515 0 0 1-1.118.726M15 15h-1a2 2 0 0 0-1 3.75A1.3 1.3 0 0 1 12 21A9 9 0 0 1 5.628 5.644">
                </path>
                <circle cx="7.5"
                    cy="10.5"
                    r="1"></circle>
                <circle cx="12"
                    cy="7.5"
                    r="1"></circle>
                <circle cx="16.5"
                    cy="10.5"
                    r="1"></circle>
                <path d="m3 3l18 18"></path>
            </g>
        @break

        @case('small')
            <path fill="currentColor"
                d="M5.12 14L7.5 7.67L9.87 14M6.5 5L1 19h2.25l1.12-3h6.25l1.13 3H14L8.5 5h-2M18 17l5-5.07l-1.41-1.43L19 13.1V7h-2v6.1l-2.59-2.6L13 11.93L18 17Z">
            </path>
        @break

        @case('source')
            <path fill="currentColor"
                d="M14 2H6a2 2 0 0 0-2 2v16c0 1.11.89 2 2 2h12c1.11 0 2-.89 2-2V8l-6-6m4 18H6V4h7v5h5v11m-8.46-4.35l2.09 2.09L10.35 19L7 15.65l3.35-3.35l1.28 1.26l-2.09 2.09m7.46 0L13.65 19l-1.27-1.26l2.09-2.09l-2.09-2.09l1.27-1.26L17 15.65Z">
            </path>
        @break

        @case('strike')
            <path fill="currentColor"
                d="M6.85 7.08C6.85 4.37 9.45 3 12.24 3c1.64 0 3 .49 3.9 1.28c.77.65 1.46 1.73 1.46 3.24h-3.01c0-.31-.05-.59-.15-.85c-.29-.86-1.2-1.28-2.25-1.28c-1.86 0-2.34 1.02-2.34 1.7c0 .48.25.88.74 1.21c.38.25.77.48 1.41.7H7.39c-.21-.34-.54-.89-.54-1.92zM21 12v-2H3v2h9.62c1.15.45 1.96.75 1.96 1.97c0 1-.81 1.67-2.28 1.67c-1.54 0-2.93-.54-2.93-2.51H6.4c0 .55.08 1.13.24 1.58c.81 2.29 3.29 3.3 5.67 3.3c2.27 0 5.3-.89 5.3-4.05c0-.3-.01-1.16-.48-1.94H21V12z">
            </path>
        @break

        @case('subscript')
            <path fill="currentColor"
                d="M10.52 10.73L7.3 5.72a1.112 1.112 0 1 1 1.88-1.19l2.76 4.46h.12l2.74-4.45c.21-.34.57-.54.96-.54c.88 0 1.42.98.94 1.72l-3.23 5l3.55 5.55c.48.75-.06 1.73-.94 1.73c-.38 0-.74-.2-.95-.52l-3.07-4.89h-.12l-3.07 4.89c-.2.32-.56.52-.95.52c-.88 0-1.42-.97-.94-1.72l3.54-5.55zM23 19.5c0-.28-.22-.5-.5-.5H20v-1h2c.55 0 1-.45 1-1v-1c0-.55-.45-1-1-1h-2.5c-.28 0-.5.22-.5.5s.22.5.5.5H22v1h-2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h2.5c.28 0 .5-.22.5-.5z">
            </path>
        @break

        @case('superscript')
            <path fill="currentColor"
                d="M10.51 12.73L7.3 7.72a1.112 1.112 0 1 1 1.88-1.19l2.76 4.46h.12l2.74-4.45c.2-.34.56-.54.95-.54c.88 0 1.42.98.94 1.72l-3.23 5l3.55 5.55c.49.75-.05 1.73-.93 1.73c-.38 0-.74-.2-.95-.52l-3.07-4.89h-.12l-3.07 4.89c-.21.32-.56.52-.95.52c-.88 0-1.42-.97-.94-1.72l3.53-5.55zM23 8.5c0-.28-.22-.5-.5-.5H20V7h2c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1h-2.5c-.28 0-.5.22-.5.5s.22.5.5.5H22v1h-2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h2.5c.28 0 .5-.22.5-.5z">
            </path>
        @break

        @case('table')
            <path fill="currentColor"
                d="M5 4h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2m0 4v4h6V8H5m8 0v4h6V8h-6m-8 6v4h6v-4H5m8 0v4h6v-4h-6Z">
            </path>
        @break

        @case('underline')
            <path fill="currentColor"
                d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z">
            </path>
        @break

        @case('undo')
            <path fill="currentColor"
                d="M12.5 8c-2.65 0-5.05.99-6.9 2.6L3.71 8.71C3.08 8.08 2 8.52 2 9.41V15c0 .55.45 1 1 1h5.59c.89 0 1.34-1.08.71-1.71l-1.91-1.91c1.39-1.16 3.16-1.88 5.12-1.88c3.16 0 5.89 1.84 7.19 4.5c.27.56.91.84 1.5.64c.71-.23 1.07-1.04.75-1.72C20.23 10.42 16.65 8 12.5 8z">
            </path>
        @break

        @default
    @endswitch
</svg>
