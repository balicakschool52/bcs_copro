<?php

namespace App\Observers;

use App\Models\VisionAndMission;
use Illuminate\Support\Facades\Auth;

class VisionAndMissionObserver
{
    /**
     * Handle the VisionAndMission "created" event.
     */
    public function created(VisionAndMission $visionAndMission): void
    {
        $visionAndMission->created_by = Auth::user()?->id;
        $visionAndMission->saveQuietly();
    }

    /**
     * Handle the VisionAndMission "updated" event.
     */
    public function updated(VisionAndMission $visionAndMission): void
    {
        $visionAndMission->modified_by = Auth::user()?->id;
        $visionAndMission->saveQuietly();
    }

    /**
     * Handle the VisionAndMission "deleted" event.
     */
    public function deleted(VisionAndMission $visionAndMission): void
    {
        $visionAndMission->modified_by = Auth::user()?->id;
        $visionAndMission->deleted_by = Auth::user()?->id;
        $visionAndMission->saveQuietly();
    }

    /**
     * Handle the VisionAndMission "restored" event.
     */
    public function restored(VisionAndMission $visionAndMission): void
    {
        //
    }

    /**
     * Handle the VisionAndMission "force deleted" event.
     */
    public function forceDeleted(VisionAndMission $visionAndMission): void
    {
        //
    }
}
