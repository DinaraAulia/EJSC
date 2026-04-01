<?php

namespace App\Filament\Resources\Pengunjungs\Pages;

use App\Filament\Resources\Pengunjungs\PengunjungResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengunjungs extends ListRecords
{
    protected static string $resource = PengunjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
