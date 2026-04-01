<?php

namespace App\Filament\Resources\Talentas\Pages;

use App\Filament\Resources\Talentas\TalentaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTalentas extends ListRecords
{
    protected static string $resource = TalentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
