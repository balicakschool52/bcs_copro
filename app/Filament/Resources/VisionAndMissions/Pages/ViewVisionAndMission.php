<?php

namespace App\Filament\Resources\VisionAndMissions\Pages;

use App\Filament\Resources\VisionAndMissions\VisionAndMissionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVisionAndMission extends ViewRecord
{
    protected static string $resource = VisionAndMissionResource::class;

    public function getTitle(): string
    {
        return 'Visi Misi View';
    }

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.pages.dashboard') => 'Dashboard',
            route('filament.admin.resources.vision-and-missions.index') => 'Visi Misi',
            'Detail',
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
