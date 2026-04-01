<?php

namespace App\Filament\Resources\GaleriFotos\Pages;

use App\Filament\Resources\GaleriFotos\GaleriFotoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGaleriFoto extends EditRecord
{
    protected static string $resource = GaleriFotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
