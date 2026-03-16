<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Detail')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('name')
                            ->label('Name'),
                        TextEntry::make('email')
                            ->label('Email'),
                        TextEntry::make('role')
                            ->badge()
                            ->formatStateUsing(fn(?string $state): string => match ((string) $state) {
                                '1' => 'Dev',
                                '2' => 'Admin',
                                '3' => 'Lecture',
                                '4' => 'Student',
                                default => '-',
                            }),
                    ]),

                Section::make('Student Information')
                    ->columnSpanFull()
                    ->visible(fn($record): bool => (string) $record->role === '4')
                    ->schema([
                        TextEntry::make('student.nim')
                            ->label('NIM')
                            ->placeholder('-'),
                        TextEntry::make('student.studyProgram.name')
                            ->label('Study Program')
                            ->placeholder('-'),
                    ]),

                Section::make('Lecture Information')
                    ->columnSpanFull()
                    ->visible(fn($record): bool => (string) $record->role === '3')
                    ->schema([
                        TextEntry::make('lecture.nip')
                            ->label('NIP')
                            ->placeholder('-'),
                        TextEntry::make('lecture.studyProgram.name')
                            ->label('Study Program')
                            ->placeholder('-'),
                        TextEntry::make('lecture.description')
                            ->label('Description')
                            ->placeholder('-'),
                    ]),
            ]);
    }
}
