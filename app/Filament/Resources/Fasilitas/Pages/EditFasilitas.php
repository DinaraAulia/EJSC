<?php

namespace App\Filament\Resources\Fasilitas\Pages;

use App\Filament\Resources\Fasilitas\FasilitasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFasilitas extends EditRecord
{
    protected static string $resource = FasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
