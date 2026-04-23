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
                \Filament\Schemas\Components\Section::make('Main Information')
                    ->schema([
                        TextInput::make('nama_ruangan')
                            ->label('Room Name')
                            ->required()
                            ->maxLength(100)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (\Filament\Schemas\Components\Utilities\Set $set, ?string $state) => $set('slug', \Illuminate\Support\Str::slug($state))),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->readOnly()
                            ->dehydrated()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        \Filament\Forms\Components\FileUpload::make('gambar')
                            ->label('Image')
                            ->image()
                            ->directory('ruangan-images')
                            ->disk('public')
                            ->visibility('public'),
                    ])->columns(2),
                    
                \Filament\Schemas\Components\Section::make('Room Details')
                    ->schema([
                        TextInput::make('deskripsi')
                            ->label('Short Description')
                            ->maxLength(100)
                            ->default(null),
                        TextInput::make('kapasitas')
                            ->label('Capacity (Seats)')
                            ->numeric()
                            ->default(null),
                        TextInput::make('wifi_speed')
                            ->label('Wi-Fi Speed')
                            ->placeholder('e.g. 50 Mbps')
                            ->maxLength(50),
                        TextInput::make('luas')
                            ->label('Room Area (m²)')
                            ->numeric()
                            ->placeholder('e.g. 80'),
                        \Filament\Forms\Components\RichEditor::make('deskripsi_panjang')
                            ->label('Full Room Description')
                            ->columnSpanFull(),
                        DatePicker::make('tgl_diperbarui')
                            ->label('Date Updated')
                            ->default(now()),
                    ])->columns(2),
            ]);
    }
}
