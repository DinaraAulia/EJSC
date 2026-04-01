<?php

namespace App\Filament\Resources\Talentas\Pages;

use App\Filament\Resources\Talentas\TalentaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTalenta extends EditRecord
{
    protected static string $resource = TalentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
