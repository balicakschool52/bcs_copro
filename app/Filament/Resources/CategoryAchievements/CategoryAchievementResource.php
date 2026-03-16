<?php

namespace App\Filament\Resources\CategoryAchievements;

use App\Filament\Resources\CategoryAchievements\Pages\ManageCategoryAchievements;
use App\Filament\Resources\CategoryAchievements\Schemas\CategoryAchievementsForm;
use App\Filament\Resources\CategoryAchievements\Tables\CategoryAchievementsTable;
use App\Models\CategoryAchievement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class CategoryAchievementResource extends Resource
{
    protected static ?string $model = CategoryAchievement::class;

    protected static string|BackedEnum|null $navigationIcon = 'lucide-tag';

    protected static ?string $recordTitleAttribute = 'CategoryAchievement';

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    protected static ?string $navigationLabel = 'Category Achievement';

    public static function form(Schema $schema): Schema
    {
        return CategoryAchievementsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryAchievementsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageCategoryAchievements::route('/'),
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
