<?php

namespace App\Filament\Resources\Peminjamen\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class PeminjamenTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_peminjaman')
                    ->label('Booking ID')
                    ->searchable(),
                TextColumn::make('ruangan.nama_ruangan')
                    ->label('Room')
                    ->searchable(),
                TextColumn::make('nama_kegiatan')
                    ->label('Event Name')
                    ->searchable(),
                TextColumn::make('latar_belakang')
                    ->label('Event Background')
                    ->searchable(),
                TextColumn::make('tujuan_kegiatan')
                    ->label('Event Objective')
                    ->searchable(),
                TextColumn::make('sasaran_peserta')
                    ->label('Target Participants')
                    ->searchable(),
                TextColumn::make('jumlah_peserta')
                    ->label('Number of Participants')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('narasumber')
                    ->label('Speaker')
                    ->searchable(),
                TextColumn::make('pj_kegiatan')
                    ->label('PIC Name')
                    ->searchable(),
                TextColumn::make('instansi')
                    ->label('Institution')
                    ->searchable(),
                TextColumn::make('alamat_instansi')
                    ->label('Institution address')
                    ->searchable(),
                TextColumn::make('wilayah')
                    ->label('Region')
                    ->searchable(),
                TextColumn::make('no_hp_pj')
                    ->label('P i c phone')
                    ->searchable(),
                TextColumn::make('tgl_penggunaan')
                    ->label('Date of use')
                    ->date()
                    ->sortable(),
                TextColumn::make('jam_mulai')
                    ->label('Start time')
                    ->sortable(),
                TextColumn::make('jam_berakhir')
                    ->label('End time')
                    ->sortable(),
                TextColumn::make('berkas_ktp')
                    ->label('KTP')
                    ->url(fn ($record) => $record->berkas_ktp ? asset('storage/' . $record->berkas_ktp) : null)
                    ->openUrlInNewTab(),
                TextColumn::make('berkas_surat')
                    ->label('Surat')
                    ->url(fn ($record) => $record->berkas_surat ? asset('storage/' . $record->berkas_surat) : null)
                    ->openUrlInNewTab(),
                ImageColumn::make('berkas_poster')
                    ->label('Poster')
                    ->disk('public')
                    ->height(80)
                    ->width(120)
                    ->toggleable(isToggledHiddenByDefault: false),
                IconColumn::make('status')
                    ->label('Status')
                    ->icons([
                        'heroicon-o-clock' => 'pending',
                        'heroicon-o-check-circle' => 'approved',
                        'heroicon-o-x-circle' => 'rejected',
                    ])
                    ->colors([
                        'secondary' => 'pending',
                        'success' => 'approved',
                        'danger' => 'rejected',
                    ]),
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
