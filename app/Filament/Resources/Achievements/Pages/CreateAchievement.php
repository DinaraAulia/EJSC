<?php

namespace App\Filament\Resources\Achievements\Pages;

use App\Filament\Resources\Achievements\AchievementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAchievement extends CreateRecord
{
    protected static string $resource = AchievementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['category']) && $data['category'] === 'Other' && !empty($data['other_category'])) {
            $data['category'] = $data['other_category'];
        }

        return $data;
    }
}
