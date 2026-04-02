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
                    ->label('Agenda Name')
                    ->required()
                    ->maxLength(100)
                    ->default(null),
                DatePicker::make('tanggal')
                    ->label('Date')
                    ->required(),
                TextInput::make('detail_agenda')
                    ->label('Agenda Details')
                    ->maxLength(100)
                    ->default(null),
                FileUpload::make('berkas')
                    ->label('File (PNG/PDF)')
                    ->acceptedFileTypes(['application/pdf', 'image/png', 'image/jpeg', 'image/jpg'])
                    ->directory('agenda-files')
                    ->openable()
                    ->downloadable()
                    ->disk('public')
                    ->visibility('public')
                    ->default(null),
            ]);
    }
}
