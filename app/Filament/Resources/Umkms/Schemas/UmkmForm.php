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
                \Filament\Schemas\Components\Section::make('UMKM Information')
                    ->schema([
                        TextInput::make('name')
                            ->label('UMKM Name')
                            ->required()
                            ->maxLength(255),
                            
                        \Filament\Forms\Components\Select::make('city')
                            ->label('City/Region')
                            ->options([
                                'Kabupaten Malang' => 'Kabupaten Malang',
                                'Kota Malang' => 'Kota Malang',
                                'Kota Batu' => 'Kota Batu',
                                'Kabupaten Pasuruan' => 'Kabupaten Pasuruan',
                                'Kota Pasuruan' => 'Kota Pasuruan',
                                'Kabupaten Sidoarjo' => 'Kabupaten Sidoarjo',
                                'Kabupaten Blitar' => 'Kabupaten Blitar',
                                'Kota Blitar' => 'Kota Blitar',
                                'Kota Surabaya' => 'Kota Surabaya',
                                'Other' => 'Other (Type below)',
                            ])
                            ->required()
                            ->live()
                            ->afterStateHydrated(function ($set, $state) {
                                $options = [
                                    'Kabupaten Malang', 'Kota Malang', 'Kota Batu',
                                    'Kabupaten Pasuruan', 'Kota Pasuruan', 'Kabupaten Sidoarjo',
                                    'Kabupaten Blitar', 'Kota Blitar', 'Kota Surabaya'
                                ];
                                if ($state && !in_array($state, $options)) {
                                    $set('city', 'Other');
                                    $set('other_city', $state);
                                }
                            }),
                        TextInput::make('other_city')
                            ->label('Specify Other City')
                            ->placeholder('e.g. Kabupaten Jombang')
                            ->visible(fn ($get) => $get('city') === 'Other')
                            ->required(fn ($get) => $get('city') === 'Other')
                            ->dehydrated(false),

                        \Filament\Forms\Components\Select::make('category')
                            ->label('Category')
                            ->options(function () {
                                $defaults = [
                                    'Food' => 'Food',
                                    'Coffee Roastery' => 'Coffee Roastery',
                                    'Fashion' => 'Fashion',
                                    'Kriya' => 'Kriya',
                                ];
                                
                                // Get other categories from DB
                                $dbCategories = \App\Models\Umkm::distinct()->pluck('category', 'category')->toArray();
                                
                                return array_merge($defaults, $dbCategories, ['Other' => 'Other (Type below)']);
                            })
                            ->required()
                            ->live()
                            ->afterStateHydrated(function ($set, $state) {
                                $defaults = ['Food', 'Coffee Roastery', 'Fashion', 'Kriya'];
                                if ($state && !in_array($state, $defaults)) {
                                    $set('category', 'Other');
                                    $set('other_category', $state);
                                }
                            }),
                        TextInput::make('other_category')
                            ->label('Specify Other Category')
                            ->placeholder('e.g. Services')
                            ->visible(fn ($get) => $get('category') === 'Other')
                            ->required(fn ($get) => $get('category') === 'Other')
                            ->dehydrated(false),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('UMKM Image')
                    ->schema([
                        \Filament\Schemas\Components\Tabs::make('Thumbnail Image')
                            ->tabs([
                                \Filament\Schemas\Components\Tabs\Tab::make('Upload Photo')
                                    ->schema([
                                        \Filament\Forms\Components\FileUpload::make('image')
                                            ->label('Upload Image')
                                            ->image()
                                            ->disk('public')
                                            ->directory('umkm-images'),
                                    ]),
                                \Filament\Schemas\Components\Tabs\Tab::make('Direct URL')
                                    ->schema([
                                        TextInput::make('image_url')
                                            ->label('Image URL')
                                            ->placeholder('https://google.com/image.jpg')
                                            ->helperText('Paste direct link from the internet')
                                            ->afterStateHydrated(fn ($set, $state, $record) => $record && \Illuminate\Support\Str::startsWith($record->image, ['http://', 'https://']) ? $set('image_url', $record->image) : null)
                                            ->dehydrated(false),
                                    ]),
                            ])
                            ->persistTabInQueryString(),
                    ])->columns(1),
            ]);
    }
}
