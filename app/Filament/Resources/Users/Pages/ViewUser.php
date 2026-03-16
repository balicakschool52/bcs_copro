<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\Support\UserRoleProfileSync;
use App\Filament\Resources\Users\UserResource;
use App\Models\User;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string
    {
        return 'User View';
    }

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.pages.dashboard') => 'Dashboard',
            route('filament.admin.resources.users.index') => 'User',
            'Detail',
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->mutateRecordDataUsing(fn(array $data, User $record): array => UserRoleProfileSync::fillEditPayload($data, $record))
                ->using(function (array $data, User $record): User {
                    $record->update(UserRoleProfileSync::userPayload($data));

                    return $record;
                })
                ->after(function (array $data, User $record): void {
                    UserRoleProfileSync::sync($record, $data);
                }),
        ];
    }
}
