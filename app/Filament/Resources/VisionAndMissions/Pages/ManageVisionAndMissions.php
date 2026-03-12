<?php

namespace App\Filament\Resources\VisionAndMissions\Pages;

use App\Filament\Resources\VisionAndMissions\VisionAndMissionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageVisionAndMissions extends ManageRecords
{
    protected static string $resource = VisionAndMissionResource::class;

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.pages.dashboard') => 'Dashboard',
            route('filament.admin.resources.vision-and-missions.index') => 'Visi Misi',
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
