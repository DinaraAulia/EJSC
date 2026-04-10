<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Achievement Details')
                    ->schema([
                        TextInput::make('title')
                            ->label('Achievement Title')
                            ->required()
                            ->maxLength(255),
                        \Filament\Forms\Components\Select::make('year')
                            ->label('Year')
                            ->options(function () {
                                $currentYear = date('Y');
                                $years = range($currentYear, $currentYear - 20);
                                return array_combine($years, $years);
                            })
                            ->required(),
                        \Filament\Forms\Components\Select::make('category')
                            ->label('Category')
                            ->options(function () {
                                $defaults = [
                                    'Provinsi Jawa Timur' => 'Provinsi Jawa Timur',
                                ];
                                
                                // Get other categories from DB to enable "dynamic" dropdown persistence
                                $dbCategories = \App\Models\Achievement::distinct()->pluck('category', 'category')->toArray();
                                
                                return array_merge($defaults, $dbCategories, ['Other' => 'Other (Type below)']);
                            })
                            ->required()
                            ->live()
                            ->afterStateHydrated(function ($set, $state) {
                                if ($state && $state !== 'Provinsi Jawa Timur') {
                                    $set('category', 'Other');
                                    $set('other_category', $state);
                                }
                            }),
                        TextInput::make('other_category')
                            ->label('Specify Other Category')
                            ->visible(fn ($get) => $get('category') === 'Other')
                            ->required(fn ($get) => $get('category') === 'Other')
                            ->dehydrated(false),
                            
                        Textarea::make('description')
                            ->label('About this achievement')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('Documents')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Certificate (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->disk('public')
                            ->directory('achievements')
                            ->preserveFilenames()
                            ->required(),
                    ]),
            ]);
    }
}
