<?php

namespace App\Filament\Resources\Pengunjungs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PengunjungsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_pengunjung')
                    ->searchable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('usia')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jenis_kelamin')
                    ->searchable(),
                TextColumn::make('no_hp')
                    ->searchable(),
                TextColumn::make('sosmed')
                    ->searchable(),
                TextColumn::make('profesi')
                    ->searchable(),
                TextColumn::make('domisili')
                    ->searchable(),
                TextColumn::make('sumber_info')
                    ->searchable(),
                TextColumn::make('keperluan')
                    ->searchable(),
                TextColumn::make('created_at')
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
