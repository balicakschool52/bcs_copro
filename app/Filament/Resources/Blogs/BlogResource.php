<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\Pages\ManageBlogs;
use App\Filament\Resources\Blogs\Pages\ViewBlog;
use App\Filament\Resources\Blogs\Schemas\BlogsForm;
use App\Filament\Resources\Blogs\Schemas\BlogsInfolist;
use App\Filament\Resources\Blogs\Tables\BlogsTable;
use App\Models\Blog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static ?string $recordTitleAttribute = 'Blog';

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Blog';

    public static function form(Schema $schema): Schema
    {
        return BlogsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogsTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BlogsInfolist::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageBlogs::route('/'),
            'view' => ViewBlog::route('/{record}'),
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
