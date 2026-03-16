<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use App\Filament\Resources\Users\Support\UserRoleProfileSync;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        UserRoleProfileSync::sync($this->record, $this->form->getState());
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return UserRoleProfileSync::userPayload($data);
    }
}
