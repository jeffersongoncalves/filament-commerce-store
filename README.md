<p align="center"><img src="art/banner.png" alt="Store" width="100%"></p>

# Store

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-commerce-store.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-commerce-store) [![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-commerce-store.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-commerce-store) [![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-commerce-store.svg?style=flat-square)](LICENSE.md)

Filament v5 admin resources for the Laravel Commerce store module.

## Installation

```bash
composer require jeffersongoncalves/filament-commerce-store
```

## Usage

The plugin is auto-discovered. Register it on a Filament panel:

```php
use JeffersonGoncalves\\FilamentCommerce\\Umbrella\\CommercePanelPlugin;

public function panel(Panel $panel): Panel
{
    return $panel->plugin(CommercePanelPlugin::make());
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
