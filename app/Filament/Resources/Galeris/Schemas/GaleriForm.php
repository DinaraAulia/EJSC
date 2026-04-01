<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Main Information')
                    ->schema([
                        TextInput::make('judul')
                            ->label('Title')
                            ->required()
                            ->maxLength(100),
                        DatePicker::make('tanggal')
                            ->label('Date')
                            ->required(),
                        TextInput::make('deskripsi')
                            ->label('Description')
                            ->maxLength(100),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('Gallery Media')
                    ->schema([
                        \Filament\Schemas\Components\Tabs::make('Cover Photo')
                            ->tabs([
                                \Filament\Schemas\Components\Tabs\Tab::make('Upload File')
                                    ->schema([
                                        \Filament\Forms\Components\FileUpload::make('cover_foto')
                                            ->label('Cover Photo (Upload)')
                                            ->image()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('gallery-covers'),
                                    ]),
                                \Filament\Schemas\Components\Tabs\Tab::make('Direct URL')
                                    ->schema([
                                        \Filament\Forms\Components\TextInput::make('cover_url')
                                            ->label('Cover Image URL')
                                            ->placeholder('https://google.com/image.jpg')
                                            ->helperText('Input raw image URL from the internet')
                                            ->afterStateHydrated(fn ($set, $state, $record) => $record && Str::startsWith($record->cover_foto, 'http') ? $set('cover_url', $record->cover_foto) : null)
                                            ->dehydrated(true),
                                    ]),
                            ])
                            ->columnSpanFull()
                            ->persistTabInQueryString(),

                        \Filament\Schemas\Components\Tabs::make('Album Photos')
                            ->tabs([
                                \Filament\Schemas\Components\Tabs\Tab::make('Upload Files')
                                    ->schema([
                                        \Filament\Forms\Components\FileUpload::make('album_fotos')
                                            ->label('Album Photos (Upload)')
                                            ->helperText('Maximum 4 photos')
                                            ->image()
                                            ->multiple()
                                            ->reorderable()
                                            ->maxFiles(4)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('gallery-albums'),
                                    ]),
                                \Filament\Schemas\Components\Tabs\Tab::make('Direct URLs')
                                    ->schema([
                                        \Filament\Forms\Components\Repeater::make('album_urls')
                                            ->label('Album Image URLs')
                                            ->simple(TextInput::make('url')->placeholder('https://google.com/image.jpg'))
                                            ->maxItems(4)
                                            ->helperText('Input raw image URLs from the internet')
                                            ->afterStateHydrated(fn ($set, $state, $record) => $record && $record->album_fotos && count($record->album_fotos) > 0 && Str::startsWith($record->album_fotos[0], 'http') ? $set('album_urls', $record->album_fotos) : null)
                                            ->dehydrated(true),
                                    ]),
                            ])
                            ->columnSpanFull()
                            ->persistTabInQueryString(),
                    ])->columns(1),
            ]);
    }
}
