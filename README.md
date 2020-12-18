# Blade Brand Icons

A package to easily make use of [Brand Icons (Simple Icons)](https://github.com/simple-icons/simple-icons) in your Laravel Blade views.

For a full list of available icons see and preview them at [simpleicons.org](https://simpleicons.org/).

## Requirements

- PHP 7.3 or higher
- Laravel 7.14 or higher
- Blade Icons Package
- Simple Icons Package

## Requirements Installation

### Blade Icons
```bash
composer require blade-ui-kit/blade-icons
```

### Simple Icons
```bash
composer require simple-icons/simple-icons
```

## Installation

```bash
composer require sadegh19b/blade-brand-icons
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-brand-apple/>
```

You can also pass classes to your icon components:

```blade
<x-brand-apple class="text-white"/>
```

And even use inline styles:

```blade
<x-brand-apple style="color: #fff"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-brand-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-brand-icons/apple.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Brand Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Maintainers

Blade Brand Icons is developed and maintained by [Sadegh19b](https://github.com/sadegh19b).

Blade Icons is developed and maintained by [Dries Vints](https://driesvints.com).

SVG Simple Icons is developed and maintained by [Dan Leech](https://twitter.com/bathtype).

## License

Blade Brand Icons is open-sourced software licensed under [the MIT license](LICENSE.md).