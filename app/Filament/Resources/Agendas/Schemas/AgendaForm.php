<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_agenda')
                    ->default(null),
                DatePicker::make('tanggal'),
                TextInput::make('detail_agenda')
                    ->default(null),
                TextInput::make('berkas')
                    ->default(null),
            ]);
    }
}
