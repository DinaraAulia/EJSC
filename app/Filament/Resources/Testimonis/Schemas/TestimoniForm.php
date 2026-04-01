<?php

namespace App\Filament\Resources\Testimonis\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimoniForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pengulas')
                    ->required()
                    ->label('Reviewer Name')
                    ->default(null),
                TextInput::make('rating')
                    ->required()
                    ->label('Rating')
                    ->default(null),
                TextArea::make('detail_ulasan')
                    ->required()
                    ->label('Review Details')
                    ->minLength(80)
                    ->maxLength(100)
                    // ->hint(fn ($state) => strlen($state ?? '') . ' / 100 karakter')
                    // ->live(onBlur: false) // Agar update angka langsung saat mengetik
                    ->helperText('Tuliskan review antara 80 sampai 100 karakter.')
                    ->default(null),
                DatePicker::make('tgl_ulasan')
                    ->required()
                    ->label('Review Date'),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
