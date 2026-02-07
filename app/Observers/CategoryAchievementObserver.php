<?php

namespace App\Observers;

use App\Models\CategoryAchievement;
use Illuminate\Support\Facades\Auth;

class CategoryAchievementObserver
{
    /**
     * Handle the CategoryAchievement "created" event.
     */
    public function created(CategoryAchievement $categoryAchievement): void
    {
        $categoryAchievement->created_by = Auth::user()?->id;
        $categoryAchievement->saveQuietly();
    }

    /**
     * Handle the CategoryAchievement "updated" event.
     */
    public function updated(CategoryAchievement $categoryAchievement): void
    {
        $categoryAchievement->modified_by = Auth::user()?->id;
        $categoryAchievement->saveQuietly();
    }

    /**
     * Handle the CategoryAchievement "deleted" event.
     */
    public function deleted(CategoryAchievement $categoryAchievement): void
    {
        $categoryAchievement->modified_by = Auth::user()?->id;
        $categoryAchievement->deleted_by = Auth::user()?->id;
        $categoryAchievement->saveQuietly();
    }

    /**
     * Handle the CategoryAchievement "restored" event.
     */
    public function restored(CategoryAchievement $categoryAchievement): void
    {
        //
    }

    /**
     * Handle the CategoryAchievement "force deleted" event.
     */
    public function forceDeleted(CategoryAchievement $categoryAchievement): void
    {
        //
    }
}
