# Filament Tiptap Editor

A Tiptap ingtegration for Filament Admin/Forms.

![screenshot in light mode](./images/screenshot-light.png)

![screenshot in dark mode](./images/screenshot-dark.png)

![screenshot of fullscreen editing in dark mode](./images/fullscreen-mode-dark.png)

- Supports Light/Dark Mode
- Fullscreen editing
- Overrideable Media uploading
- Profile based toolbars to simplify reusing features

## Installation

Install the package via composer

```bash
composer require awcodes/filament-tiptap-editor
```

## Usage

The editor extends the default Forms Field class so all other methods available on that class can be used when adding it to a form.

```php
use FilamentTiptapEditor\TiptapEditor;

TiptapEditor::make('content')
    ->profile('simple')
    ->required(); //->etc
```

## Config

Publish the config file.

```bash
php artisan vendor:publish --tag="filament-tiptap-editor-config"
```

### Profiles

The package comes with 3 profiles for buttons/tools out of the box.

- default: 'bold', 'italic', 'strike', 'underline', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'lead', 'small', 'color', 'bulletList', 'orderedList', 'checkedList', 'align', 'blockquote', 'hr', 'link', 'superscript', 'subscript', 'table', 'grid', 'media', 'youtube', 'vimeo', 'code', 'codeblock', 'source'
- simple: 'bold', 'italic', 'h1', 'h2', 'h3', 'lead', 'hr', 'bulletList', 'orderedList', 'checkedList', 'link', 'media'
- barebone: 'bold', 'italic', 'link', 'bulletList', 'orderedList'

See `filament-tiptap-editor.php` config file for modifying profiles to add / remove buttons from the editor or to create your own.

### Media / Images

- accepted_file_types: ['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml', 'application/pdf']
- disk: 'public'
- directory: 'images'
- visibility: 'public'
- preserve_file_names: false
- max_file_size: 2042
- image_crop_aspect_ratio: null
- image_resize_target_width: null
- image_resize_target_height: null
- media_uploader_id: 'filament-tiptap-editor-media-uploader-modal'

## Overrides

### Link Modal

You may override the default link modal with your own Livewire component and assign its ID to the `link_modal_id` setting in the config file.

See `vendor/awcodes/resources/views/components/link-modal.blade.php` and `vendor/awcodes/filament-tiptap-editor/src/Components/LinkModal.php` for implementation.

### Media Modal

You may override the default file uploader with your own Livewire component and assign its ID to the `media_uploader_id` setting in the config file.

See `vendor/awcodes/resources/views/components/media-uploader-modal.blade.php` and `vendor/awcodes/filament-tiptap-editor/src/Components/MediaUploaderModal.php` for implementation.

## Versioning

This projects follow the [Semantic Versioning](https://semver.org/) guidelines.

## License

Copyright (c) 2022 Adam Weston and contributors

Licensed under the MIT license, see [LICENSE.md](LICENSE.md) for details.
