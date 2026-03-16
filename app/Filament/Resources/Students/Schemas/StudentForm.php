<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nim')
                    ->label('NIM')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Select::make('study_program_id')
                    ->label('Study Program')
                    ->relationship('studyProgram', 'name')
                    ->searchable()
                    ->preload()
                    ->native(false),
            ]);
    }
}
