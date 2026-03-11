<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Detail')
                    ->schema([
                        TextEntry::make('title')
                            ->label('Title'),
                        TextEntry::make('subtitle')
                            ->label('Subtitle'),
                        TextEntry::make('date')
                            ->label('Date')
                            ->date('d M Y'),

                        TextEntry::make('is_active')
                            ->label('Status')
                            ->badge()
                            ->formatStateUsing(fn($state): string => $state ? 'Active' : 'Inactive')
                            ->color(fn($state): string => $state ? 'success' : 'gray'),
                    ])
                    ->extraAttributes([
                        'class' => 'h-full'
                    ]),
                Section::make('Blog Image')
                    ->schema([
                        ImageEntry::make('photo')
                            ->disabled('label')
                            ->height(220)
                            ->columnSpanFull(),
                    ])
                    ->extraAttributes([
                        'class' => 'h-full'
                    ]),
                Section::make('Blog Text')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
