<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('News Detail')
                    ->schema([
                        TextEntry::make('title')
                            ->label('Title'),
                        TextEntry::make('date_start')
                            ->label('Start Date')
                            ->date('d M Y'),
                        TextEntry::make('date_end')
                            ->label('End Date')
                            ->date('d M Y'),
                        TextEntry::make('location')
                            ->label('Location'),
                        TextEntry::make('is_active')
                            ->label('Status')
                            ->badge()
                            ->formatStateUsing(fn ($state): string => $state ? 'Active' : 'Inactive')
                            ->color(fn ($state): string => $state ? 'success' : 'gray'),
                    ])
                    ->extraAttributes([
                        'class' => 'h-full',
                    ]),
                Section::make('News Text')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
