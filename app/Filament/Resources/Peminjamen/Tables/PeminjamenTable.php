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
                TextColumn::make('id_peminjaman')
                    ->searchable(),
                TextColumn::make('ruangan_id')
                    ->searchable(),
                TextColumn::make('nama_kegiatan')
                    ->searchable(),
                TextColumn::make('latar_belakang')
                    ->searchable(),
                TextColumn::make('tujuan_kegiatan')
                    ->searchable(),
                TextColumn::make('sasaran_peserta')
                    ->searchable(),
                TextColumn::make('jumlah_peserta')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('narasumber')
                    ->searchable(),
                TextColumn::make('pj_kegiatan')
                    ->searchable(),
                TextColumn::make('instansi')
                    ->searchable(),
                TextColumn::make('alamat_instansi')
                    ->searchable(),
                TextColumn::make('wilayah')
                    ->searchable(),
                TextColumn::make('no_hp_pj')
                    ->searchable(),
                TextColumn::make('tgl_penggunaan')
                    ->date()
                    ->sortable(),
                TextColumn::make('jam_mulai')
                    ->time()
                    ->sortable(),
                TextColumn::make('jam_berakhir')
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
