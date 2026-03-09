<?php

namespace App\Filament\Resources\CodeReferals\Pages;

use App\Filament\Resources\CodeReferals\CodeReferalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCodeReferals extends ManageRecords
{
    protected static string $resource = CodeReferalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
