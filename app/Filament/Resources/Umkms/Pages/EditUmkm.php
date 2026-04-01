<?php

namespace App\Filament\Resources\Umkms\Pages;

use App\Filament\Resources\Umkms\UmkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmkm extends EditRecord
{
    protected static string $resource = UmkmResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
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

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
