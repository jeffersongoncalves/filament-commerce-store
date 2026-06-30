<?php

namespace JeffersonGoncalves\FilamentCommerce\Store\Resources\Store;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Store\Models\Store;
use JeffersonGoncalves\FilamentCommerce\Store\CommerceStorePlugin;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Pages\CreateStore;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Pages\EditStore;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Pages\ListStore;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Schemas\StoreForm;
use JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Tables\StoreTable;

class StoreResource extends Resource
{
    protected static ?string $model = Store::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceStorePlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-store.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Form $form): Form
    {
        return StoreForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return StoreTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStore::route('/'),
            'create' => CreateStore::route('/create'),
            'edit' => EditStore::route('/{record}/edit'),
        ];
    }
}
