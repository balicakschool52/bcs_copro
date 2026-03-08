<?php

namespace App\Filament\Resources\StudyPrograms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use MuhammadKazimSadiq\FilamentQuickEdit\Actions\QuickEditAction;


class StudyProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Program Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('grade')
                    ->label('Grade')
                    ->badge()
                    ->formatStateUsing(fn ($state): string => $state === '1' ? 'Basic' : 'Middle')
                    ->color(fn ($state): string => $state === '1' ? 'primary' : 'success'),
                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn ($state): string => $state ? 'Active' : 'Inactive')
                    ->color(fn ($state): string => $state ? 'success' : 'gray'),

            ])
            ->actions([
                QuickEditAction::make()
                    ->selectFields(['name', 'grade', 'is_active']),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
