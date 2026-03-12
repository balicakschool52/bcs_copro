<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SettingsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Setting Detail')
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('school_name')
                            ->label('School Name'),
                        TextEntry::make('telephone')
                            ->label('Telephone'),
                        TextEntry::make('address')
                            ->label('Address'),
                    ]),
            ]);
    }
}
