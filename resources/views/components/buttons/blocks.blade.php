<div x-data="{
    open: false,
    toggle() {
        if (this.open) {
            return this.close()
        }

        this.$refs.button.focus()

        this.open = true
    },
    close(focusAfter) {
        if (!this.open) return

        this.open = false

        focusAfter && focusAfter.focus()
    },
    insertBlock() {
        return;
    }
}"
    x-on:keydown.escape.prevent.stop="close($refs.button)"
    x-id="['dropdown-button']"
    class="relative flex flex-col items-center">
    <button type="button"
        x-ref="button"
        x-on:click="toggle()"
        :aria-expanded="open"
        :aria-controls="$id('dropdown-button')"
        :class="{ 'active': open }"
        x-tooltip="'Table'">
        <svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            aria-hidden="true"
            role="img"
            class="w-5 h-5 iconify iconify--ic"
            width="24"
            height="24"
            preserveAspectRatio="xMidYMid meet"
            viewBox="0 0 36 36">
            <path fill="currentColor"
                d="m31.42 9.09l-13-6a1 1 0 0 0-.84 0l-13 6A1 1 0 0 0 4 10v17a1 1 0 0 0 .58.91l13 6a1 1 0 0 0 .84 0l13-6A1 1 0 0 0 32 27V10a1 1 0 0 0-.58-.91ZM18 5.1L28.61 10L18 14.9L7.39 10ZM6 11.56l11 5.08v14.8L6 26.36Zm13 19.88v-14.8l11-5.08v14.8Z"
                class="clr-i-outline clr-i-outline-path-1"></path>
            <path fill="none"
                d="M0 0h36v36H0z"></path>
        </svg>
        <span class="sr-only">Table</span>
    </button>

    <div x-ref="panel"
        x-show="open"
        x-transition.origin.top.left
        x-on:click.outside="close($refs.button)"
        :id="$id('dropdown-button')"
        style="display: none;"
        class="absolute z-30 h-48 overflow-y-scroll text-white bg-gray-900 rounded-md shadow-md top-full"
        style="display: none;">
        <ul class="text-sm divide-y divide-gray-700 min-w-[144px]">
            @foreach ($blockLabels as $block)
                <li>
                    <button type="button"
                        wire:click.prevent="getBlock('{{ $block['resolve'] }}')"
                        class="block w-full px-3 py-2 text-left whitespace-nowrap hover:bg-primary-500 focus:bg-primary-500 rounded-t-md">{{ $block['label'] }}</button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
