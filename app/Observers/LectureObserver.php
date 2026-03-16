<?php

namespace App\Observers;

use App\Models\Lecture;
use Illuminate\Support\Facades\Auth;

class LectureObserver
{
    /**
     * Handle the Lecture "created" event.
     */
    public function created(Lecture $lecture): void
    {
        $lecture->created_by = Auth::user()?->id;
        $lecture->saveQuietly();
    }

    /**
     * Handle the Lecture "updated" event.
     */
    public function updated(Lecture $lecture): void
    {
        $lecture->modified_by = Auth::user()?->id;
        $lecture->saveQuietly();
    }

    /**
     * Handle the Lecture "deleted" event.
     */
    public function deleted(Lecture $lecture): void
    {
        $lecture->modified_by = Auth::user()?->id;
        $lecture->deleted_by = Auth::user()?->id;
        $lecture->saveQuietly();
    }

    /**
     * Handle the Lecture "restored" event.
     */
    public function restored(Lecture $lecture): void
    {
        //
    }

    /**
     * Handle the Lecture "force deleted" event.
     */
    public function forceDeleted(Lecture $lecture): void
    {
        //
    }
}
