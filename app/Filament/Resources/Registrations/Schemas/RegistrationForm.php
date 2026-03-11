<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('place_of_birth')
                    ->required(),
                DatePicker::make('date_of_birth')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('previous_school')
                    ->required(),
                TextInput::make('graduation_year')
                    ->required(),
                TextInput::make('reference')
                    ->required(),
                FileUpload::make('payment_proof')
                    ->directory('payment-proof'),
                Select::make('status')
                    ->options([
                        '0' => 'Process',
                        '1' => 'Verified',
                    ])
                    ->formatStateUsing(fn($state) => $state === null ? null : (string) $state)
                    ->dehydrateStateUsing(fn($state) => $state === null ? null : (string) $state)
                    ->native(false)
                    ->required(),

                Select::make('study_program_id')
                    ->relationship('studyProgram', 'name')
                    ->searchable()
                    ->preload()
                    ->optionsLimit(5)
                    ->required()
            ]);
    }
}
