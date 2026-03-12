<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBlog extends ViewRecord
{
    protected static string $resource = BlogResource::class;

    public function getTitle(): string
    {
        return 'Blog View';
    }

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.pages.dashboard') => 'Dashboard',
            route('filament.admin.resources.blogs.index') => 'Blog',
            'Detail',
        ];
    }


    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
