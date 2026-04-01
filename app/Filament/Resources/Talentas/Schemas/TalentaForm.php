<?php

namespace App\Filament\Resources\Talentas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TalentaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('portfolio')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('city')
                    ->required(),
                TextInput::make('avatar')
                    ->default(null),
            ]);
    }
}
