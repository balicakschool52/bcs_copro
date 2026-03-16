<?php

namespace App\Filament\Resources\Lectures\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LectureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Lecture Detail')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('nip')
                            ->label('NIP')
                            ->placeholder('-'),
                        TextEntry::make('name')
                            ->label('Name'),
                        TextEntry::make('studyProgram.name')
                            ->label('Study Program')
                            ->placeholder('-'),
                        TextEntry::make('user_id')
                            ->label('User ID'),
                        TextEntry::make('description')
                            ->label('Description')
                            ->placeholder('-'),
                        TextEntry::make('photo')
                            ->label('Photo')
                            ->placeholder('-'),
                    ]),
            ]);
    }
}
