<?php

namespace App\Filament\Resources\CodeReferals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class CodeReferalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('CodeReferal')
            ->columns([
                TextColumn::make('code')
                    ->searchable(),
                TextColumn::make('discount_type')
                    ->badge()
                    ->formatStateUsing(fn($state): string => $state === '1' ? 'Percent' : 'Fixed')
                    ->color(fn($state): string => $state === '1' ? 'primary' : 'success'),
                TextColumn::make('discount_value')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->discount_type === '1') {
                            return $state . ' %';
                        }

                        return 'Rp ' . number_format((float) $state, 0, ',', '.');
                    }),
                TextColumn::make('start_at')
                    ->date()
                    ->sortable(),
                TextColumn::make('end_at')
                    ->date()
                    ->sortable(),
                TextColumn::make('quota')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('used_count')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
