<?php

namespace App\Filament\Resources\GaleriFotos\Pages;

use App\Filament\Resources\GaleriFotos\GaleriFotoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGaleriFotos extends ListRecords
{
    protected static string $resource = GaleriFotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
