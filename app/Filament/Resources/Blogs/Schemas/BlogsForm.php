<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlogsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(200),
                TextInput::make('subtitle')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->native(false)
                    ->required(),
                TextInput::make('location')
                    ->required(),
                FileUpload::make('photo')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->directory('blog')
                    ->visibility('public')
                    ->required(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }
}
