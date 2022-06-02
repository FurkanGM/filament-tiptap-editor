<button type="button"
    x-on:click="editor().chain().focus().toggleSuperscript().run()"
    :class="{ 'bg-gray-300 text-gray-900 dark:bg-gray-600 dark:text-gray-300': isActive('superscript', updatedAt) }"
    @class([
        'rounded block p-1 hover:bg-gray-200 focus:bg-gray-200',
        'dark:hover:bg-gray-800 dark:focus:bg-gray-800' => config(
            'filament.dark_mode'
        ),
    ])
    x-tooltip="'Superscript'">
    <svg xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        aria-hidden="true"
        role="img"
        class="w-5 h-5 iconify iconify--ic"
        width="24"
        height="24"
        preserveAspectRatio="xMidYMid meet"
        viewBox="0 0 24 24">
        <path fill="currentColor"
            d="M10.51 12.73L7.3 7.72a1.112 1.112 0 1 1 1.88-1.19l2.76 4.46h.12l2.74-4.45c.2-.34.56-.54.95-.54c.88 0 1.42.98.94 1.72l-3.23 5l3.55 5.55c.49.75-.05 1.73-.93 1.73c-.38 0-.74-.2-.95-.52l-3.07-4.89h-.12l-3.07 4.89c-.21.32-.56.52-.95.52c-.88 0-1.42-.97-.94-1.72l3.53-5.55zM23 8.5c0-.28-.22-.5-.5-.5H20V7h2c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1h-2.5c-.28 0-.5.22-.5.5s.22.5.5.5H22v1h-2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h2.5c.28 0 .5-.22.5-.5z">
        </path>
    </svg>
    <span class="sr-only">Superscript</span>
</button>
