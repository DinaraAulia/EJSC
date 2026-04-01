<?php

namespace App\Filament\Resources\Peminjamen\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class PeminjamanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('ruangan_id')
                    ->default(null),
                TextInput::make('nama_kegiatan')
                    ->default(null),
                TextInput::make('latar_belakang')
                    ->default(null),
                TextInput::make('tujuan_kegiatan')
                    ->default(null),
                TextInput::make('sasaran_peserta')
                    ->default(null),
                TextInput::make('jumlah_peserta')
                    ->numeric()
                    ->default(null),
                TextInput::make('narasumber')
                    ->default(null),
                TextInput::make('pj_kegiatan')
                    ->default(null),
                TextInput::make('instansi')
                    ->default(null),
                TextInput::make('alamat_instansi')
                    ->default(null),
                TextInput::make('wilayah')
                    ->default(null),
                TextInput::make('no_hp_pj')
                    ->required(),
                Textarea::make('fasilitas_tambahan')
                    ->default(null)
                    ->columnSpanFull(),
                DatePicker::make('tgl_penggunaan'),
                TimePicker::make('jam_mulai'),
                TimePicker::make('jam_berakhir'),
                TextInput::make('berkas_ktp')
                    ->default(null),
                TextInput::make('berkas_surat')
                    ->default(null),
                TextInput::make('berkas_poster')
                    ->default(null),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
            ]);
    }
}
