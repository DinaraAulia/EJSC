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
                        TextInput::make('nama_kegiatan')
                            ->label('Name of Event')
                            ->placeholder('Enter Event Name')
                            ->required(),
                        TextInput::make('tujuan_kegiatan')
                            ->label('Event Objective')
                            ->placeholder('E.g., Workshop, Seminar, etc.')
                            ->required(),
                        Textarea::make('latar_belakang')
                            ->label('Event Background')
                            ->placeholder('Brief context of the event')
                            ->required(),
                        TextInput::make('sasaran_peserta')
                            ->label('Target Participants')
                            ->placeholder('E.g., Students, Public, Creatives')
                            ->required(),
                        TextInput::make('jumlah_peserta')
                            ->label('Number of Participants')
                            ->numeric()
                            ->placeholder('Total expected attendees')
                            ->required(),
                        TextInput::make('narasumber')
                            ->label('Speaker / Guest Star Name')
                            ->placeholder('Event speaker or guest info'),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('2. Representative Info')
                    ->schema([
                        TextInput::make('pj_kegiatan')
                            ->label('PIC Name')
                            ->placeholder('Full name of person in charge')
                            ->required(),
                        TextInput::make('no_hp_pj')
                            ->label('PIC Phone/WA')
                            ->tel()
                            ->placeholder('08xxxxxxxxxx')
                            ->required(),
                        TextInput::make('instansi')
                            ->label('Institution/Community')
                            ->placeholder('Organization name')
                            ->required(),
                        Select::make('wilayah')
                            ->label('Region/City')
                            ->options([
                                'Kota Malang' => 'Kota Malang',
                                'Kabupaten Malang' => 'Kabupaten Malang',
                                'Kota Batu' => 'Kota Batu',
                                'Lainnya' => 'Lainnya',
                            ])
                            ->placeholder('Select Region')
                            ->required(),
                        Textarea::make('alamat_instansi')
                            ->label('Full Address of Institution')
                            ->placeholder('Complete address detail')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('3. Booking Details')
                    ->schema([
                        Select::make('ruangan_id')
                            ->label('Room Selected')
                            ->relationship('ruangan', 'nama_ruangan')
                            ->placeholder('Select Room')
                            ->required(),
                        DatePicker::make('tgl_penggunaan')
                            ->label('Date of Use')
                            ->required(),
                        \Filament\Forms\Components\TimePicker::make('jam_mulai')
                            ->label('Start Time')
                            ->required(),
                        \Filament\Forms\Components\TimePicker::make('jam_berakhir')
                            ->label('End Time')
                            ->required(),
                        \Filament\Forms\Components\CheckboxList::make('fasilitas_tambahan')
                            ->label('Required Facilities')
                            ->options([
                                'LCD & Proyektor' => 'LCD & Proyektor',
                                'Set Alat Zoom Meeting' => 'Set Alat Zoom Meeting',
                                'Sound System & Mic' => 'Sound System & Mic',
                                'TV & set PC standart + Audio' => 'TV & set PC standart + Audio',
                            ])
                            ->columns(2),
                        Textarea::make('other_requirements')
                            ->label('Other Requirements (optional)')
                            ->placeholder('Specify other facilities needed...')
                            ->columnSpanFull(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('4. Documents')
                    ->schema([
                        \Filament\Forms\Components\FileUpload::make('berkas_ktp')
                            ->label('Upload KTP of PIC')
                            ->disk('public')
                            ->directory('peminjaman')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->maxSize(10240)
                            ->required(),
                        \Filament\Forms\Components\FileUpload::make('berkas_surat')
                            ->label('Upload Room Usage Request Letter')
                            ->disk('public')
                            ->directory('peminjaman')
                            ->helperText('The request letter should be addressed to the Head of Bakorwil III Malang, containing the request for EJSC Malang facility usage, event name, date and time, room name, and total participants.')
                            ->acceptedFileTypes(['application/pdf', 'image/*'])
                            ->maxSize(10240)
                            ->required(),
                        \Filament\Forms\Components\FileUpload::make('berkas_poster')
                            ->label('Upload Event Poster (Optional)')
                            ->disk('public')
                            ->directory('peminjaman')
                            ->acceptedFileTypes(['image/*'])
                            ->maxSize(10240),
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
