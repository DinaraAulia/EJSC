<?php

namespace App\Filament\Resources\Pengunjungs\Pages;

use App\Filament\Resources\Pengunjungs\PengunjungResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPengunjung extends EditRecord
{
    protected static string $resource = PengunjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
