<?php

namespace App\Filament\Resources\Peminjamen\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PeminjamenTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('booking_id')
                    ->searchable(),
                TextColumn::make('room_id')
                    ->searchable(),
                TextColumn::make('event_name')
                    ->searchable(),
                TextColumn::make('event_background')
                    ->searchable(),
                TextColumn::make('event_objective')
                    ->searchable(),
                TextColumn::make('target_participants')
                    ->searchable(),
                TextColumn::make('number_of_participants')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('speaker')
                    ->searchable(),
                TextColumn::make('PIC_name')
                    ->searchable(),
                TextColumn::make('institution')
                    ->searchable(),
                TextColumn::make('institution_address')
                    ->searchable(),
                TextColumn::make('region')
                    ->searchable(),
                TextColumn::make('PIC_phone')
                    ->searchable(),
                TextColumn::make('date_of_use')
                    ->date()
                    ->sortable(),
                TextColumn::make('start_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('end_time')
                    ->time()
                    ->sortable(),
                TextColumn::make('berkas_ktp')
                    ->searchable(),
                TextColumn::make('berkas_surat')
                    ->searchable(),
                TextColumn::make('berkas_poster')
                    ->searchable(),
                IconColumn::make('status')
                    ->boolean(),
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
