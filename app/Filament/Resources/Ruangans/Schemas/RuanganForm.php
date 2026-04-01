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
                \Filament\Forms\Components\Section::make('Informasi Utama')
                    ->schema([
                        TextInput::make('nama_ruangan')
                            ->required()
                            ->maxLength(100)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (\Filament\Forms\Set $set, ?string $state) => $set('slug', \Illuminate\Support\Str::slug($state))),
                        TextInput::make('slug')
                            ->readOnly()
                            ->dehydrated()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        \Filament\Forms\Components\FileUpload::make('gambar')
                            ->image()
                            ->directory('ruangan-images'),
                    ])->columns(2),
                    
                \Filament\Forms\Components\Section::make('Detail Ruangan')
                    ->schema([
                        TextInput::make('deskripsi')
                            ->maxLength(100)
                            ->default(null),
                        TextInput::make('kapasitas')
                            ->numeric()
                            ->default(null),
                        TextInput::make('wifi_speed')
                            ->label('Kecepatan Wi-Fi')
                            ->placeholder('e.g. 50 Mbps')
                            ->maxLength(50),
                        TextInput::make('luas')
                            ->label('Luas Ruangan (m²)')
                            ->numeric()
                            ->placeholder('e.g. 80'),
                        \Filament\Forms\Components\RichEditor::make('deskripsi_panjang')
                            ->label('Deskripsi Lengkap Ruangan')
                            ->columnSpanFull(),
                        Toggle::make('is_tersedia')
                            ->required()
                            ->default(true),
                        DatePicker::make('tgl_diperbarui')
                            ->default(now()),
                    ])->columns(2),
            ]);
    }
}
