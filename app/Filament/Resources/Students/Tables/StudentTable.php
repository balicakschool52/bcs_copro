<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Student')
            ->columns([
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('studyProgram.name')
                    ->label('Study Program')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
