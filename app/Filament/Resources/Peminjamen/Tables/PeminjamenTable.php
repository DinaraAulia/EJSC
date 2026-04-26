<?php

namespace App\Filament\Resources\Peminjamen\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
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
                    ->label('Booking ID')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('ruangan.nama_ruangan')
                    ->label('Room')
                    ->searchable()
                    ->badge(),
                TextColumn::make('kategori_instansi')
                    ->label('Type')
                    ->searchable()
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('instansi')
                    ->label('Institution')
                    ->searchable(),
                TextColumn::make('nama_kegiatan')
                    ->label('Event Name')
                    ->searchable(),
                TextColumn::make('jumlah_peserta')
                    ->label('Participants')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tgl_penggunaan')
                    ->label('Start Date')
                    ->date()
                    ->sortable(),
                TextColumn::make('tgl_berakhir')
                    ->label('End Date')
                    ->date()
                    ->sortable(),
                TextColumn::make('jam_mulai')
                    ->label('Start Time'),
                TextColumn::make('jam_berakhir')
                    ->label('End Time'),
                TextColumn::make('pj_kegiatan')
                    ->label('PIC Name')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('no_hp_pj')
                    ->label('PIC Phone')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('berkas_surat')
                    ->label('Request Letter')
                    ->formatStateUsing(fn ($state) => $state ? '📄 View File' : '—')
                    ->url(fn ($record) => $record->berkas_surat ? asset('storage/' . $record->berkas_surat) : null)
                    ->openUrlInNewTab()
                    ->color('warning'),
                IconColumn::make('bersedia_ubah_jadwal')
                    ->label('Willing Reschedule')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        default    => 'warning',
                    }),
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
            ])
            ->defaultSort('created_at', 'desc');
    }
}
