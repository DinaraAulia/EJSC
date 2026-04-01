<?php

namespace App\Filament\Resources\Umkms\Pages;

use App\Filament\Resources\Umkms\UmkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUmkm extends CreateRecord
{
    protected static string $resource = UmkmResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Handle City
        if (isset($data['city']) && $data['city'] === 'Other' && !empty($data['other_city'])) {
            $data['city'] = $data['other_city'];
        }

        // Handle Category
        if (isset($data['category']) && $data['category'] === 'Other' && !empty($data['other_category'])) {
            $data['category'] = $data['other_category'];
        }

        // Handle Image URL
        if (!empty($data['image_url'])) {
            $data['image'] = $data['image_url'];
        }

        return $data;
    }
}
