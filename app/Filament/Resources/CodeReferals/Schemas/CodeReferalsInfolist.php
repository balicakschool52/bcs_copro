<?php

namespace App\Filament\Resources\CodeReferals\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CodeReferalsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Code Referral')
                    ->icon('heroicon-m-book-open')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextEntry::make('code')
                                    ->label('Code')
                                    ->badge(),

                                TextEntry::make('discount_type')
                                    ->label('Type')
                                    ->formatStateUsing(fn($state) => (string) $state === '1' ? 'Percent' : 'Fixed')
                                    ->badge()
                                    ->color(fn($state) => (string) $state === '1' ? 'primary' : 'success'),

                                TextEntry::make('discount_value')
                                    ->label('Value')
                                    ->formatStateUsing(
                                        fn($state, $record) =>
                                        (string) $record->discount_type === '1'
                                            ? number_format((float) $state, 0, ',', '.') . ' %'
                                            : 'Rp ' . number_format((float) $state, 0, ',', '.')
                                    ),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextEntry::make('start_at')
                                    ->label('Start at')
                                    ->date('d M Y')
                                    ->icon('heroicon-m-calendar'),

                                TextEntry::make('end_at')
                                    ->label('End at')
                                    ->date('d M Y')
                                    ->icon('heroicon-m-calendar-date-range'),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextEntry::make('quota')
                                    ->label('Quota'),

                                TextEntry::make('used_count')
                                    ->label('Used'),
                            ]),

                        IconEntry::make('is_active')
                            ->label('Active')
                            ->boolean(),
                    ]),
            ]);
    }
}
