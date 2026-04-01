<?php

namespace App\Filament\Resources\Galeris\Pages;

use App\Filament\Resources\Galeris\GaleriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGaleri extends CreateRecord
{
    protected static string $resource = GaleriResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (!empty($data['cover_url'])) {
            $data['cover_foto'] = $data['cover_url'];
        }

        if (!empty($data['album_urls'])) {
            $data['album_fotos'] = $data['album_urls'];
        }

        return $data;
    }
}
