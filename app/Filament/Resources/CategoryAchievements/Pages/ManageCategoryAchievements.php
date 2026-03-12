<?php

namespace App\Filament\Resources\CategoryAchievements\Pages;

use App\Filament\Resources\CategoryAchievements\CategoryAchievementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryAchievements extends ManageRecords
{
    protected static string $resource = CategoryAchievementResource::class;

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.pages.dashboard') => 'Dashboard',
            route('filament.admin.resources.category-achievements.index') => 'Category Achievement',
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
