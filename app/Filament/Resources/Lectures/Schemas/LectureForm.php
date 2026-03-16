<?php

namespace App\Filament\Resources\Lectures\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LectureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nip'),
                TextInput::make('name')
                    ->required(),
                TextInput::make('description'),
                Select::make('study_program_id')
                    ->relationship('studyProgram', 'name'),

                FileUpload::make('photo')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->directory('lecture')
                    ->visibility('public')
                    ->required(),
            ]);
    }
}
