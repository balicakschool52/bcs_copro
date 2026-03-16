<?php

namespace App\Filament\Resources\Users\Tables;

use App\Filament\Resources\Users\Support\UserRoleProfileSync;
use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('User')
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('role')
                    ->badge()
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        '1' => 'Dev',
                        '2' => 'Admin',
                        '3' => 'Lecture',
                        '4' => 'Student',
                        default => $state,
                    }),
            ])
            ->recordActions([
                EditAction::make()
                    ->mutateRecordDataUsing(fn(array $data, User $record): array => UserRoleProfileSync::fillEditPayload($data, $record))
                    ->using(function (array $data, User $record): User {
                        $record->update(UserRoleProfileSync::userPayload($data));

                        return $record;
                    })
                    ->after(function (array $data, User $record): void {
                        UserRoleProfileSync::sync($record, $data);
                    }),
                DeleteAction::make(),
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
