<?php

namespace App\Filament\Exports;

use App\Models\Registration;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Support\Number;

class RegistrationExporter extends Exporter
{
    protected static ?string $model = Registration::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('name'),
            ExportColumn::make('address'),
            ExportColumn::make('place_of_birth'),
            ExportColumn::make('date_of_birth'),
            ExportColumn::make('phone_number'),
            ExportColumn::make('email'),
            ExportColumn::make('previous_school'),
            ExportColumn::make('graduation_year'),
            ExportColumn::make('reference'),
            ExportColumn::make('referral_code_input'),
            ExportColumn::make('registration_fee'),
            ExportColumn::make('discount_amount'),
            ExportColumn::make('final_amount'),
            ExportColumn::make('payment_proof'),
            ExportColumn::make('status'),
            ExportColumn::make('codeReferal.code'),
            ExportColumn::make('studyProgram.name'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
            ExportColumn::make('deleted_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your registration export has completed and ' . Number::format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
