<?php

namespace App\Filament\Resources\VisionAndMissions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VisionAndMissionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('VisionAndMission')
            ->columns([
                TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn($state): string => (string) $state === '1' ? 'Vision' : 'Mission')
                    ->color(fn($state): string => (string) $state === '1' ? 'primary' : 'success'),
                TextColumn::make('description')
                    ->limit(80)
                    ->searchable(),
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
