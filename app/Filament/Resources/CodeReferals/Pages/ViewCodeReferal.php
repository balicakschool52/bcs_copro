<?php

namespace App\Filament\Resources\CodeReferals\Pages;

use App\Filament\Resources\CodeReferals\CodeReferalResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCodeReferal extends ViewRecord
{
    protected static string $resource = CodeReferalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
