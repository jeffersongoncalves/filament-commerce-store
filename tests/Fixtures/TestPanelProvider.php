<?php

namespace JeffersonGoncalves\FilamentCommerce\Store\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Store\CommerceStorePlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceStorePlugin::make(),
            ]);
    }
}
