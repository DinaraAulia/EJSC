<?php

namespace App\Filament\Resources\Agendas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AgendasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_agenda')
                    ->searchable()
                    ->label('Agenda ID'),
                TextColumn::make('nama_agenda')
                    ->searchable()
                    ->label('Agenda Name'),
                TextColumn::make('tanggal')
                    ->date()
                    ->sortable()
                    ->label('Date'),
                TextColumn::make('detail_agenda')
                    ->searchable()
                    ->label('Agenda Details'),
                TextColumn::make('berkas')
                    ->label('Files')
                    ->formatStateUsing(fn ($state) => $state ? 'Lihat Berkas' : 'Tidak ada file')
                    ->url(fn ($record) => $record->berkas ? asset('storage/' . $record->berkas) : null)
                    ->openUrlInNewTab()
                    ->color('primary'),
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
