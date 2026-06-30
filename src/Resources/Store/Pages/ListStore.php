<?php

namespace JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\StoreResource;

class ListStore extends ListRecords
{
    protected static string $resource = StoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
