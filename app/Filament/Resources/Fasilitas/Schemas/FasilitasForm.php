<?php

namespace App\Filament\Resources\Fasilitas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FasilitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_fasilitas')
                    ->default(null),
                TextInput::make('ikon')
                    ->default(null),
                Toggle::make('is_tersedia')
                    ->required(),
                DatePicker::make('tgl_diperbarui'),
            ]);
    }
}
