<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_agenda')
                    ->required()
                    ->maxLength(100)
                    ->default(null),
                DatePicker::make('tanggal')
                    ->required(),
                TextInput::make('detail_agenda')
                    ->maxLength(100)
                    ->default(null),
                FileUpload::make('berkas')
                    ->acceptedFileTypes(['application/pdf'])
                    ->image()
                    ->directory('agenda-files')
                    ->openable()
                    ->downloadable()
                    ->disk('public')
                    ->visibility('public')
                    ->default(null),
            ]);
    }
}
