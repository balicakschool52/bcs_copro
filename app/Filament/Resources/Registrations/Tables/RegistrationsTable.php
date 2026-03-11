<?php

namespace App\Filament\Resources\Registrations\Tables;

use Carbon\Carbon;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;

use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\ExportAction;
use App\Filament\Exports\RegistrationExporter;
use Filament\Actions\Exports\Enums\ExportFormat;

class RegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('place_of_birth')
                    ->label('Birth Info')
                    ->icon('heroicon-m-map-pin')
                    ->description(fn($record) => $record->date_of_birth
                        ? Carbon::parse($record->date_of_birth)->format('d M Y')
                        : '-')
                    ->searchable(),

                TextColumn::make('phone_number')
                    ->label('Contact Info')
                    ->icon('heroicon-m-phone')
                    ->description(fn($record) => $record->email)
                    ->copyable(),

                TextColumn::make('studyProgram.name')
                    ->label('Study Program')
                    ->badge()
                    ->color('primary')
                    ->sortable(),


                TextColumn::make('reference')->searchable(),

                TextColumn::make('codeReferal.code')
                    ->label('Referral Code')
                    ->badge()
                    ->color('success')
                    ->searchable(),

                TextColumn::make('discount_amount')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('final_amount')
                    ->label('Payment')
                    ->money('Rp.'),

                ImageColumn::make('payment_proof')
                    ->label('Proof')
                    ->disk('public')
                    ->height(40),

                TextColumn::make('status')
                    ->sortable()
                    ->badge()
                    ->formatStateUsing(fn($state) => match ((string) $state) {
                        '0' => 'Process',
                        '1' => 'Verified',
                        default => 'Unknown',
                    })
                    ->color(fn($state) => match ((string) $state) {
                        '0' => 'warning',
                        '1' => 'success',
                        default => 'gray',
                    }),
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ])
            ])
            ->emptyStateIcon('heroicon-o-bookmark')
            ->emptyStateDescription('Once you write your first post, it will appear here.')
            ->toolbarActions([
                ExportAction::make()
                    ->exporter(RegistrationExporter::class)
                    ->formats([
                        ExportFormat::Xlsx,
                    ]),
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
