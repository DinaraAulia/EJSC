<?php

namespace App\Filament\Resources\Talentas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

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
                                'Kabupaten Malang' => 'Malang Regency',
                                'Kota Malang' => 'Malang City',
                                'Kota Batu' => 'Batu City',
                                'Kabupaten Pasuruan' => 'Pasuruan Regency',
                                'Kota Pasuruan' => 'Pasuruan City',
                                'Kabupaten Sidoarjo' => 'Sidoarjo Regency',
                                'Kabupaten Blitar' => 'Blitar Regency',
                                'Kota Blitar' => 'Blitar City',
                                'Kota Surabaya' => 'Surabaya City',
                                'Other' => 'Other (Type below)',
                            ])
                            ->required()
                            ->live()
                            ->dehydrateStateUsing(fn ($state, $get) => $state === 'Other' ? $get('other_city') : $state)
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

                \Filament\Schemas\Components\Section::make('Skill Category')
                    ->schema([
                        \Filament\Forms\Components\Select::make('skill')
                            ->label('Expertise Category')
                            ->options(function () {
                                $defaults = [
                                    'Anti Hacking Programming' => 'Anti Hacking Programming',
                                    'Web Developer' => 'Web Developer',
                                    'Event Organizer' => 'Event Organizer',
                                    'Game Developer' => 'Game Developer',
                                    'Mobile Apps Developer' => 'Mobile Apps Developer',
                                    'Social Media Management' => 'Social Media Management',
                                    'Video & Photography' => 'Video & Photography',
                                    'Travel & Food Blogger' => 'Travel & Food Blogger',
                                    'Digital Marketing' => 'Digital Marketing',
                                    'Design & Branding Identity' => 'Design & Branding Identity',
                                    'Content Creator' => 'Content Creator',
                                    'Animation Developer' => 'Animation Developer',
                                ];
                                
                                // Get extra categories from DB
                                $dbCategories = \App\Models\Talenta::distinct()->whereNotNull('skill')->pluck('skill', 'skill')->toArray();
                                
                                return array_merge($defaults, $dbCategories, ['Other' => 'Other (Type below)']);
                            })
                            ->required()
                            ->live()
                            ->dehydrateStateUsing(fn ($state, $get) => $state === 'Other' ? $get('other_skill') : $state)
                            ->afterStateHydrated(function ($set, $state) {
                                $defaults = [
                                    'Anti Hacking Programming', 'Web Developer', 'Event Organizer',
                                    'Game Developer', 'Mobile Apps Developer', 'Social Media Management',
                                    'Video & Photography', 'Travel & Food Blogger', 'Digital Marketing',
                                    'Design & Branding Identity', 'Content Creator', 'Animation Developer'
                                ];
                                if ($state && !in_array($state, $defaults)) {
                                    $set('skill', 'Other');
                                    $set('other_skill', $state);
                                }
                            }),
                        TextInput::make('other_skill')
                            ->label('Specify Other Category')
                            ->placeholder('e.g. Data Scientist')
                            ->visible(fn ($get) => $get('skill') === 'Other')
                            ->required(fn ($get) => $get('skill') === 'Other')
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
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull(),
                    ])->columns(1),
            ]);
    }
}
