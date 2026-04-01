<?php

namespace App\Filament\Resources\Testimonis\Schemas;

use Filament\Forms\Components\DatePicker;
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
                    ->default(null),
                TextInput::make('rating')
                    ->default(null),
                TextInput::make('detail_ulasan')
                    ->default(null),
                DatePicker::make('tgl_ulasan'),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
