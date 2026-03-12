<?php

namespace App\Filament\Resources\Registrations\Pages;

use App\Filament\Resources\Registrations\RegistrationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageRegistrations extends ManageRecords
{
    protected static string $resource = RegistrationResource::class;

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.pages.dashboard') => 'Dashboard',
            route('filament.admin.resources.registrations.index') => 'Registration',
        ];
    }
}
