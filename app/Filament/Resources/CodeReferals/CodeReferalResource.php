<?php

namespace App\Filament\Resources\CodeReferals;

use App\Filament\Resources\CodeReferals\Pages\ManageCodeReferals;
use App\Filament\Resources\CodeReferals\Schemas\CodeReferalsForm;
use App\Filament\Resources\CodeReferals\Tables\CodeReferalsTable;
use App\Models\CodeReferal;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CodeReferalResource extends Resource
{
    protected static ?string $model = CodeReferal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::QrCode;

    protected static ?string $recordTitleAttribute = 'CodeReferal';

    public static function form(Schema $schema): Schema

    {
        return CodeReferalsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CodeReferalsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageCodeReferals::route('/'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
