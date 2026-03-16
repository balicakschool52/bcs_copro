<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\StudyProgram;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Unique;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->unique(
                                ignoreRecord: true,
                                modifyRuleUsing: fn(Unique $rule) => $rule->whereNull('deleted_at'),
                            ),

                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->unique(
                                ignoreRecord: true,
                                modifyRuleUsing: fn(Unique $rule) => $rule->whereNull('deleted_at'),
                            ),

                        Select::make('role')
                            ->options([
                                '1' => 'Dev',
                                '2' => 'Admin',
                                '3' => 'Lecture',
                                '4' => 'Student',
                            ])
                            ->required()
                            ->live()
                            ->native(false),

                        TextInput::make('password')
                            ->password()
                            ->dehydrated(fn($state) => filled($state))
                            ->required(fn(string $operation): bool => $operation === 'create')
                            ->dehydrateStateUsing(fn($state) => filled($state) ? bcrypt($state) : null),
                    ]),

                Section::make('Student Information')
                    ->schema([
                        TextInput::make('nim')
                            ->label('NIM')
                            ->maxLength(20)
                            ->required(fn(Get $get): bool => (string) $get('role') === '4')
                            ->rule(function () {
                                return (new Unique('students', 'nim'))->whereNull('deleted_at');
                            }),
                        Select::make('study_program_id')
                            ->label('Study Program')
                            ->options(fn(): array => StudyProgram::query()->pluck('name', 'id')->all())
                            ->searchable()
                            ->preload()
                            ->required(fn(Get $get): bool => (string) $get('role') === '4'),
                    ])
                    ->visible(fn(Get $get): bool => (string) $get('role') === '4'),

                Section::make('Lecture Information')
                    ->schema([
                        TextInput::make('nip')
                            ->label('NIP')
                            ->maxLength(20)
                            ->required(fn(Get $get): bool => (string) $get('role') === '3')
                            ->rule(function () {
                                return (new Unique('lectures', 'nip'))->whereNull('deleted_at');
                            }),
                        Select::make('study_program_id')
                            ->label('Study Program')
                            ->options(fn(): array => StudyProgram::query()->pluck('name', 'id')->all())
                            ->searchable()
                            ->preload()
                            ->required(fn(Get $get): bool => (string) $get('role') === '3'),
                        Textarea::make('description')
                            ->label('Description')
                            ->rows(3),
                    ])
                    ->visible(fn(Get $get): bool => (string) $get('role') === '3'),
            ]);
    }
}
