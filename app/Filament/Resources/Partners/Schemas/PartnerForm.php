<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_mitra')
                    ->default(null),
                TextInput::make('logo')
                    ->default(null),
                TextInput::make('detail_mitra')
                    ->default(null),
                TextInput::make('berkas_kerjasama')
                    ->default(null),
            ]);
    }
}
