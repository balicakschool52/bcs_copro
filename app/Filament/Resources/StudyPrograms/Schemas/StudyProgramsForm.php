<?php

namespace App\Filament\Resources\StudyPrograms\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Unique;

class StudyProgramsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->unique(
                        ignoreRecord: true,
                        modifyRuleUsing: fn(Unique $rule) => $rule->whereNull('deleted_at'),
                    ),
                Select::make('grade')
                    ->options([1 => 'Basic', 2 => 'Middle'])
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
