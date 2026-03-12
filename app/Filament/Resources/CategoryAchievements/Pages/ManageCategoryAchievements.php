<?php

namespace App\Filament\Resources\CategoryAchievements\Pages;

use App\Filament\Resources\CategoryAchievements\CategoryAchievementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryAchievements extends ManageRecords
{
    protected static string $resource = CategoryAchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
