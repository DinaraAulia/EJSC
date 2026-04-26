<?php

namespace App\Filament\Resources\Ruangans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RuangansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\ImageColumn::make('gambar')
                    ->label('Thumbnail')
                    ->circular()
                    ->disk('public'),
                TextColumn::make('id_ruangan')
                    ->label('Id room')
                    ->searchable(),
                TextColumn::make('nama_ruangan')
                    ->label('Name room')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deskripsi')
                    ->label('Description')
                    ->searchable(),
                TextColumn::make('kapasitas')
                    ->label('Capacity')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tgl_diperbarui')
                    ->label('Updated at')
                    ->date()
                    ->sortable(),
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
