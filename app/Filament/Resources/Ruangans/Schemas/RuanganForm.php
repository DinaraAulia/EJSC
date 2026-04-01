<?php

namespace App\Filament\Resources\Ruangans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RuanganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_ruangan')
                    ->default(null),
                TextInput::make('deskripsi')
                    ->default(null),
                TextInput::make('kapasitas')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_tersedia')
                    ->required(),
                DatePicker::make('tgl_diperbarui'),
            ]);
    }
}
