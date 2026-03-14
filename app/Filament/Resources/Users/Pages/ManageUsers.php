<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use App\Filament\Resources\Users\Support\UserRoleProfileSync;
use App\Models\User;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageUsers extends ManageRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->using(function (array $data): User {
                    return User::create(UserRoleProfileSync::userPayload($data));
                })
                ->after(function (array $data, User $record): void {
                    UserRoleProfileSync::sync($record, $data);
                }),
        ];
    }
}
