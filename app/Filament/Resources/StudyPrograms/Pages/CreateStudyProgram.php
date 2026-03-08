<?php

namespace App\Filament\Resources\StudyPrograms\Pages;

use App\Filament\Resources\StudyPrograms\StudyProgramResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudyProgram extends CreateRecord
{
    protected static string $resource = StudyProgramResource::class;

    protected function getRedirectUrl(): string
    {
        return StudyProgramResource::getUrl('index'); // Redirect back to dashboard instead of detail
    }
}
