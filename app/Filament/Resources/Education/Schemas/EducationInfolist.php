<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EducationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Education')
                    ->icon('heroicon-m-book-open')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextEntry::make('studyProgram.name')
                                    ->label('Study Program')
                                    ->badge(),
                                TextEntry::make('description')
                                    ->label('Description'),
                            ]),
                    ]),
            ]);
    }
}
