<?php

namespace App\Filament\Resources\Lectures\Schemas;

use Filament\Infolists\Components\ImageEntry;
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
                    ->schema([
                        TextEntry::make('nip')
                            ->label('NIP')
                            ->placeholder('-'),
                        TextEntry::make('name')
                            ->label('Name'),
                        TextEntry::make('studyProgram.name')
                            ->label('Study Program')
                            ->placeholder('-'),
                        TextEntry::make('description')
                            ->label('Description')
                            ->placeholder('-'),
                    ]),
                Section::make('Lecture Image')
                    ->schema([
                        ImageEntry::make('photo')
                            ->label('Photo')
                            ->disk('public')
                            ->height(220)
                            ->columnSpanFull(),
                    ])
                    ->extraAttributes([
                        'class' => 'h-full'
                    ]),
            ]);
    }
}
