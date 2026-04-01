<?php

namespace App\Filament\Resources\Talentas\Pages;

use App\Filament\Resources\Talentas\TalentaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTalenta extends CreateRecord
{
    protected static string $resource = TalentaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['city']) && $data['city'] === 'Other' && !empty($data['other_city'])) {
            $data['city'] = $data['other_city'];
        }

        if (!empty($data['avatar_url'])) {
            $data['avatar'] = $data['avatar_url'];
        }

        return $data;
    }
}
