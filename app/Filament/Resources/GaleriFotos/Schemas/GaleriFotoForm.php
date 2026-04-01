<?php

namespace App\Filament\Resources\GaleriFotos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriFotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('galeri_id')
                    ->default(null),
                TextInput::make('path_foto')
                    ->default(null),
            ]);
    }
}
