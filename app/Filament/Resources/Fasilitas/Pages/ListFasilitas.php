<?php

namespace App\Filament\Resources\Fasilitas\Pages;

use App\Filament\Resources\Fasilitas\FasilitasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFasilitas extends ListRecords
{
    protected static string $resource = FasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
