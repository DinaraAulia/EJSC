<?php

namespace App\Filament\Resources\Pengunjungs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PengunjungForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->default(null),
                TextInput::make('usia')
                    ->numeric()
                    ->default(null),
                TextInput::make('jenis_kelamin')
                    ->default(null),
                TextInput::make('no_hp')
                    ->default(null),
                TextInput::make('sosmed')
                    ->default(null),
                TextInput::make('profesi')
                    ->default(null),
                TextInput::make('domisili')
                    ->default(null),
                TextInput::make('sumber_info')
                    ->default(null),
                TextInput::make('keperluan')
                    ->default(null),
            ]);
    }
}
