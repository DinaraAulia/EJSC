<?php

namespace App\Filament\Resources\Testimonis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_testimoni')
                    ->searchable()
                    ->label('Review ID'),
                TextColumn::make('nama_pengulas')
                    ->searchable()
                    ->label('Reviewer Name'),
                TextColumn::make('rating')
                    ->searchable()
                    ->label('Rating'),
                TextColumn::make('detail_ulasan')
                    ->searchable()
                    ->limit(50)
                    ->label('Review Details'),
                TextColumn::make('tgl_ulasan')
                    ->date()
                    ->sortable()
                    ->label('Review Date'),
                \Filament\Tables\Columns\ToggleColumn::make('is_published')
                    ->label('Is Published'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
