<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        $data = $this->form->getState();
        $user = $this->record;

        if ($data['role'] === 'student') {
            $user->student()->create([
                'nim' => $data['nim'] ?? null,
                'study_program_id' => $data['study_program_id'] ?? null,
            ]);
        }

        if ($data['role'] === 'lecture') {
            $user->lecture()->create([
                'nip' => $data['nip'] ?? null,
                'study_program_id' => $data['study_program_id'] ?? null,
                'description' => $data['description'] ?? null,
            ]);
        }
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        unset(
            $data['nim'],
            $data['study_program_id'],
            $data['nip'],
            $data['description'],
        );

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset(
            $data['nim'],
            $data['study_program_id'],
            $data['nip'],
            $data['description'],
        );
        return $data;
    }
}
