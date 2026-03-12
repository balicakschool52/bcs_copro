<?php

namespace App\Filament\Resources\VisionAndMissions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VisionAndMissionsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Vision and Mission')
                    ->icon('heroicon-m-book-open')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextEntry::make('type')
                                    ->label('Type')
                                    ->badge()
                                    ->formatStateUsing(
                                        fn ($state): string => (string) $state === '1' ? 'Vision' : 'Mission'
                                    )
                                    ->color(
                                        fn ($state): string => (string) $state === '1' ? 'primary' : 'success'
                                    ),
                                TextEntry::make('description')
                                    ->label('Description'),
                            ]),
                    ]),
            ]);
    }
}
