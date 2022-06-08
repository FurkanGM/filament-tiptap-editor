<div @class([
    'filament-block-title bg-gray-200 text-gray-900 rounded-t py-2 px-3 uppercase text-sm flex items-center justify-between',
    'dark:text-white dark:bg-gray-900' => config('filament.dark_mode'),
])>
    <h3>{{ $getLabel() }}</h3>
    <button type="button">Edit</button>
</div>
<div @class([
    'bg-gray-100 rounded-b p-4 border-x border-b border-gray-200',
    'dark:bg-gray-800 dark:border-gray-900' => config('filament.dark_mode'),
])
    contenteditable="false">
    {{ $getChildComponentContainer() }}
</div>
