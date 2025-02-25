@props([
    'action' => null,
    'active' => null,
    'label' => null,
])
<button type="button"
    x-on:click="{{ $action }}"
    @if ($active) :class="{ 'bg-gray-300 text-gray-900 dark:bg-gray-600 dark:text-gray-300': isActive({{ $active }}, updatedAt) }" @endif
    x-tooltip="'{{ $label }}'"
    {{ $attributes }}
    @class([
        'rounded block p-1 hover:bg-gray-200 focus:bg-gray-200',
        'dark:hover:bg-gray-800 dark:focus:bg-gray-800' => config(
            'filament.dark_mode'
        ),
    ])>
    {{ $slot }}
    <span class="sr-only">{{ $label }}</span>
</button>
