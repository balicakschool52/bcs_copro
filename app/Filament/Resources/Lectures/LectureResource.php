<?php

namespace App\Filament\Resources\Lectures;

use App\Filament\Resources\Lectures\Pages\ViewLecture;
use App\Filament\Resources\Lectures\Schemas\LectureInfolist;
use App\Filament\Resources\Lectures\Pages\ManageLectures;
use App\Filament\Resources\Lectures\Schemas\LectureForm;
use App\Filament\Resources\Lectures\Tables\LectureTable;
use App\Models\Lecture;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class LectureResource extends Resource
{
    protected static ?string $model = Lecture::class;

    protected static string|BackedEnum|null $navigationIcon = 'lucide-book-user';

    protected static ?string $recordTitleAttribute = 'Lecture';

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    protected static ?string $navigationLabel = 'Lecture';

    public static function form(Schema $schema): Schema
    {
        return LectureForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LectureTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LectureInfolist::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageLectures::route('/'),
            'view' => ViewLecture::route('/{record}'),
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
