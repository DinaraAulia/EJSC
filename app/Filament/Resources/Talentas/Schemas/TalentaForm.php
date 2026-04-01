<?php

namespace App\Filament\Resources\Talentas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TalentaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Talent Profile')
                    ->schema([
                        TextInput::make('name')
                            ->label('Full Name')
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
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('Portfolio & Avatar')
                    ->schema([
                        \Filament\Schemas\Components\Tabs::make('Avatar Photo')
                            ->tabs([
                                \Filament\Schemas\Components\Tabs\Tab::make('Upload PNG')
                                    ->schema([
                                        \Filament\Forms\Components\FileUpload::make('avatar')
                                            ->label('Upload File (PNG)')
                                            ->image()
                                            ->acceptedFileTypes(['image/png'])
                                            ->disk('public')
                                            ->directory('talent-avatars'),
                                    ]),
                                \Filament\Schemas\Components\Tabs\Tab::make('Direct URL')
                                    ->schema([
                                        TextInput::make('avatar_url')
                                            ->label('Avatar Image URL')
                                            ->placeholder('https://google.com/image.jpg')
                                            ->helperText('Paste direct link from the internet')
                                            ->afterStateHydrated(fn ($set, $state, $record) => $record && Str::startsWith($record->avatar, 'http') ? $set('avatar_url', $record->avatar) : null)
                                            ->dehydrated(false),
                                    ]),
                            ])
                            ->persistTabInQueryString(),

                        \Filament\Forms\Components\FileUpload::make('portfolio')
                            ->label('Portfolio (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->disk('public')
                            ->directory('talent-portfolios')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(1),
            ]);
    }
}
