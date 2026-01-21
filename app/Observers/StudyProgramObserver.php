<?php

namespace App\Observers;

use App\Models\StudyProgram;
use Illuminate\Support\Facades\Auth;

class StudyProgramObserver
{
    /**
     * Handle the purchaser$purchaseRequest "created" event.
     */
    public function created(StudyProgram $purchaseRequest): void
    {
        $purchaseRequest->created_by = Auth::user()?->id;
        $purchaseRequest->saveQuietly();
    }

    /**
     * Handle the purchaser$purchaseRequest "updated" event.
     */
    public function updated(StudyProgram $studyProgram): void
    {
        $studyProgram->modified_by = Auth::user()?->id;
        $studyProgram->saveQuietly();
    }

    /**
     * Handle the purchaser$purchaseRequest "deleted" event.
     */
    public function deleted(StudyProgram $studyProgram): void
    {
        $studyProgram->modified_by = Auth::user()?->id;
        $studyProgram->deleted_by = Auth::user()?->id;
        $studyProgram->saveQuietly();
    }

    /**
     * Handle the PurchaseRequest "restored" event.
     */
    public function restored(StudyProgram $studyProgram): void
    {
        //
    }

    /**
     * Handle the JobType "force deleted" event.
     */
    public function forceDeleted(StudyProgram $studyProgram): void
    {
        //
    }
}
