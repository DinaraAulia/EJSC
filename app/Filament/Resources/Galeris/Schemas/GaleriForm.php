<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->default(null),
                DatePicker::make('tanggal'),
                TextInput::make('deskripsi')
                    ->default(null),
            ]);
    }
}
