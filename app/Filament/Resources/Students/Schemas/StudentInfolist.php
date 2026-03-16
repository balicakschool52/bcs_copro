<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Student Detail')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('nim')
                            ->label('NIM')
                            ->placeholder('-'),
                        TextEntry::make('name')
                            ->label('Name'),
                        TextEntry::make('studyProgram.name')
                            ->label('Study Program')
                            ->placeholder('-'),
                        TextEntry::make('user_id')
                            ->label('User ID'),
                    ]),
            ]);
    }
}
