<?php

namespace App\Filament\Resources\VisionAndMissions;

use App\Filament\Resources\VisionAndMissions\Pages\ManageVisionAndMissions;
use App\Filament\Resources\VisionAndMissions\Pages\ViewVisionAndMission;
use App\Filament\Resources\VisionAndMissions\Schemas\VisionAndMissionsForm;
use App\Filament\Resources\VisionAndMissions\Schemas\VisionAndMissionsInfolist;
use App\Filament\Resources\VisionAndMissions\Tables\VisionAndMissionsTable;
use App\Models\VisionAndMission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class VisionAndMissionResource extends Resource
{
    protected static ?string $model = VisionAndMission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'VisionAndMission';

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Vision and Mission';

    public static function form(Schema $schema): Schema
    {
        return VisionAndMissionsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisionAndMissionsTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VisionAndMissionsInfolist::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageVisionAndMissions::route('/'),
            'view' => ViewVisionAndMission::route('/{record}'),
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
