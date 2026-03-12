<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(200),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date_start')
                    ->native(false),
                DatePicker::make('date_end')
                    ->native(false)
                    ->afterOrEqual('date_start'),
                TextInput::make('location')
                    ->required(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
