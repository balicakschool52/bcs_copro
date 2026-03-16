<?php

namespace App\Filament\Resources\Lectures\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LectureTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Lecture')
            ->columns([
                TextColumn::make('nip')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                ImageColumn::make('photo')
                    ->disk('public')
                    ->height(48),
                TextColumn::make('studyProgram.name')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
