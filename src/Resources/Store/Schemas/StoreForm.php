<?php

namespace JeffersonGoncalves\FilamentCommerce\Store\Resources\Store\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class StoreForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('default_currency_code'),
                    ])->columns(2),
            ]);
    }
}
