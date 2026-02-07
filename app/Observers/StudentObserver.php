<?php

namespace App\Observers;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentObserver
{
    /**
     * Handle the Student "created" event.
     */
    public function created(Student $student): void
    {
        $student->created_by = Auth::user()?->id;
        $student->saveQuietly();
    }

    /**
     * Handle the Student "updated" event.
     */
    public function updated(Student $student): void
    {
        $student->modified_by = Auth::user()?->id;
        $student->saveQuietly();
    }

    /**
     * Handle the Student "deleted" event.
     */
    public function deleted(Student $student): void
    {
        $student->modified_by = Auth::user()?->id;
        $student->deleted_by = Auth::user()?->id;
        $student->saveQuietly();
    }

    /**
     * Handle the Student "restored" event.
     */
    public function restored(Student $student): void
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     */
    public function forceDeleted(Student $student): void
    {
        //
    }
}
