<?php

namespace JeffersonGoncalves\FilamentCommerce\Store;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Store\Concerns\HasCommerceStorePluginConfig;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\StoreResource;

class CommerceStorePlugin implements Plugin
{
    use HasCommerceStorePluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-store';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'store' => StoreResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
