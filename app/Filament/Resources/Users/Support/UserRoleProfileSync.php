<?php

namespace App\Filament\Resources\Users\Support;

use App\Models\User;
use Illuminate\Support\Arr;

class UserRoleProfileSync
{
    public static function userPayload(array $data): array
    {
        return Arr::only($data, [
            'name',
            'email',
            'password',
            'role',
        ]);
    }

    public static function fillEditPayload(array $data, User $user): array
    {
        $role = (string) $user->role;

        if ($role === '4' && $user->student) {
            $data['nim'] = $user->student->nim;
            $data['study_program_id'] = $user->student->study_program_id;
        }

        if ($role === '3' && $user->lecture) {
            $data['nip'] = $user->lecture->nip;
            $data['study_program_id'] = $user->lecture->study_program_id;
            $data['description'] = $user->lecture->description;
        }

        return $data;
    }

    public static function sync(User $user, array $data): void
    {
        $role = (string) $user->role;

        if ($role === '4') {
            $student = $user->student()->withTrashed()->first();

            if ($student) {
                if ($student->trashed()) {
                    $student->restore();
                }

                $student->update([
                    'name' => $user->name,
                    'nim' => $data['nim'] ?? null,
                    'study_program_id' => $data['study_program_id'] ?? null,
                ]);
            } else {
                $user->student()->create([
                    'name' => $user->name,
                    'nim' => $data['nim'] ?? null,
                    'study_program_id' => $data['study_program_id'] ?? null,
                ]);
            }

            $lecture = $user->lecture()->first();
            if ($lecture) {
                $lecture->delete();
            }

            return;
        }

        if ($role === '3') {
            $lecture = $user->lecture()->withTrashed()->first();

            if ($lecture) {
                if ($lecture->trashed()) {
                    $lecture->restore();
                }

                $lecture->update([
                    'name' => $user->name,
                    'nip' => $data['nip'] ?? null,
                    'study_program_id' => $data['study_program_id'] ?? null,
                    'description' => $data['description'] ?? null,
                ]);
            } else {
                $user->lecture()->create([
                    'name' => $user->name,
                    'nip' => $data['nip'] ?? null,
                    'study_program_id' => $data['study_program_id'] ?? null,
                    'description' => $data['description'] ?? null,
                ]);
            }

            $student = $user->student()->first();
            if ($student) {
                $student->delete();
            }

            return;
        }

        $student = $user->student()->first();
        if ($student) {
            $student->delete();
        }

        $lecture = $user->lecture()->first();
        if ($lecture) {
            $lecture->delete();
        }
    }
}
