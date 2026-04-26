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
                \Filament\Schemas\Components\Section::make('1. Event Information')
                    ->schema([
                        Select::make('kategori_instansi')
                            ->label('Organization Type')
                            ->options([
                                'INSTANSI' => 'Institution',
                                'UMUM (LEMBAGA/ORGANISASI)' => 'General (Agency/Organization)',
                                'EVENT (PERORANGAN)' => 'Event (Individual)',
                            ])
                            ->placeholder('Select Type')
                            ->required(),
                        TextInput::make('instansi')
                            ->label('Institution/Community/Name')
                            ->required(),
                        Textarea::make('alamat_instansi')
                            ->label('Address')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('nama_kegiatan')
                            ->label('Name of Event')
                            ->required(),
                        TextInput::make('jumlah_peserta')
                            ->label('Number of Participants')
                            ->numeric()
                            ->required(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('2. Booking Details')
                    ->schema([
                        DatePicker::make('tgl_penggunaan')
                            ->label('Start Date')
                            ->required(),
                        DatePicker::make('tgl_berakhir')
                            ->label('End Date')
                            ->required(),
                        \Filament\Forms\Components\TimePicker::make('jam_mulai')
                            ->label('Start Time')
                            ->required(),
                        \Filament\Forms\Components\TimePicker::make('jam_berakhir')
                            ->label('End Time')
                            ->required(),
                        Select::make('ruangan_id')
                            ->label('Room Selected')
                            ->relationship('ruangan', 'nama_ruangan')
                            ->placeholder('Select Room')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('3. Representative Info')
                    ->schema([
                        TextInput::make('pj_kegiatan')
                            ->label('PIC Name')
                            ->required(),
                        TextInput::make('no_hp_pj')
                            ->label('PIC Phone/WA')
                            ->tel()
                            ->required(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('4. Documents')
                    ->schema([
                        \Filament\Forms\Components\FileUpload::make('berkas_surat')
                            ->label('Room Usage Request Letter')
                            ->disk('public')
                            ->directory('peminjaman')
                            ->helperText('The request letter should be addressed to the Head of Bakorwil III Malang, containing the request for EJSC Malang facility usage, event name, date and time, room name, and total participants.')
                            ->acceptedFileTypes(['application/pdf', 'image/*'])
                            ->maxSize(10240)
                            ->downloadable()
                            ->previewable()
                            ->openable(),
                        \Filament\Forms\Components\Toggle::make('bersedia_ubah_jadwal')
                            ->label('Willing to reschedule if prioritized event occurs')
                            ->required(),
                    ]),

                \Filament\Schemas\Components\Section::make('Admin Control')
                ->schema([
                    Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'approved' => 'Approved',
                            'rejected' => 'Rejected',
                        ])
                        ->default('pending')
                        ->required(),
                ])->compact()
            ]);
    }
}
