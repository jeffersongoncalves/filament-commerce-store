<?php

namespace JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StoreForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('default_currency_code'),
                    ])->columns(2),
            ]);
    }
}
