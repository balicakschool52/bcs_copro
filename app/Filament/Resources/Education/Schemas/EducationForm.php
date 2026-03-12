<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('study_program_id')
                    ->relationship('studyProgram', 'name')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->native(false),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
