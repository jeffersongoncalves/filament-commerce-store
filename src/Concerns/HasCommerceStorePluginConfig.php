<?php

namespace JeffersonGoncalves\FilamentCommerce\Store\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceStorePluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-store';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Configuration';
    }
}
