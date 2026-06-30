<?php

namespace JeffersonGoncalves\FilamentCommerce\Store;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceStoreServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-store';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
