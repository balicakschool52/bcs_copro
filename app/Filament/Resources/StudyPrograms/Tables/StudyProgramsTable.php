<?php

namespace App\Filament\Resources\StudyPrograms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class StudyProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('StudyProgram')
            ->columns([
                TextColumn::make('name')
                    ->label('Program Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('grade')
                    ->label('Grade')
                    ->badge()
                    ->formatStateUsing(fn($state): string => $state === '1' ? 'Basic' : 'Middle')
                    ->color(fn($state): string => $state === '1' ? 'primary' : 'success'),
                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn($state): string => $state ? 'Active' : 'Inactive')
                    ->color(fn($state): string => $state ? 'success' : 'gray'),

            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->emptyStateIcon('heroicon-o-bookmark')
            ->emptyStateDescription('Once you write your first post, it will appear here.')
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
