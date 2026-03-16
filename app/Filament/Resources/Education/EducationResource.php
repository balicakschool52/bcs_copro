<?php

namespace App\Filament\Resources\Education;

use App\Filament\Resources\Education\Pages\ManageEducation;
use App\Filament\Resources\Education\Pages\ViewEducation;
use App\Filament\Resources\Education\Schemas\EducationForm;
use App\Filament\Resources\Education\Schemas\EducationInfolist;
use App\Filament\Resources\Education\Tables\EducationTable;
use App\Models\Education;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Education';

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Education';

    public static function form(Schema $schema): Schema
    {
        return EducationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EducationTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EducationInfolist::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageEducation::route('/'),
            'view' => ViewEducation::route('/{record}'),
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
