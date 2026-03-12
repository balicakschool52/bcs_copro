<?php

namespace App\Filament\Resources\VisionAndMissions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VisionAndMissionsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->options([
                        '1' => 'Vision',
                        '2' => 'Mission',
                    ])
                    ->required()
                    ->native(false)
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }
}
