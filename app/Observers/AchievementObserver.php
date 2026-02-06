<?php

namespace App\Observers;

use App\Models\Achievement;
use Illuminate\Support\Facades\Auth;

class AchievementObserver
{
    /**
     * Handle the Achievement "created" event.
     */
    public function created(Achievement $achievement): void
    {
        $achievement->created_by = Auth::user()?->id;
        $achievement->saveQuietly();
    }

    /**
     * Handle the Achievement "updated" event.
     */
    public function updated(Achievement $achievement): void
    {
        $achievement->modified_by = Auth::user()?->id;
        $achievement->saveQuietly();
    }

    /**
     * Handle the Achievement "deleted" event.
     */
    public function deleted(Achievement $achievement): void
    {
        $achievement->modified_by = Auth::user()?->id;
        $achievement->deleted_by = Auth::user()?->id;
        $achievement->saveQuietly();
    }

    /**
     * Handle the Achievement "restored" event.
     */
    public function restored(Achievement $achievement): void
    {
        //
    }

    /**
     * Handle the Achievement "force deleted" event.
     */
    public function forceDeleted(Achievement $achievement): void
    {
        //
    }
}
