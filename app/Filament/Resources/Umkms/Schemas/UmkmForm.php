<?php

namespace App\Filament\Resources\Umkms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('city')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
            ]);
    }
}
