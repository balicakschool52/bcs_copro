<?php

namespace App\Observers;

use App\Models\Registration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class RegistrationObserver
{
    /**
     * Handle the Education "created" event.
     */
    public function creating(Registration $registration): void
    {
        if (Schema::hasColumn($registration->getTable(), 'created_by')) {
            $registration->created_by = Auth::id();
        }
    }

    /**
     * Handle the Education "updated" event.
     */
    public function updating(Registration $registration): void
    {
        if (Schema::hasColumn($registration->getTable(), 'modified_by')) {
            $registration->modified_by = Auth::id();
        }
    }

    /**
     * Handle the Education "deleted" event.
     */
    public function deleted(Registration $registration): void
    {
        if (! Schema::hasColumn($registration->getTable(), 'deleted_by')) {
            return;
        }

        $registration->forceFill([
            'modified_by' => Schema::hasColumn($registration->getTable(), 'modified_by') ? Auth::id() : $registration->modified_by,
            'deleted_by' => Auth::id(),
        ])->saveQuietly();
    }

    /**
     * Handle the Education "restored" event.
     */
    public function restored(Registration $registration): void
    {
        //
    }

    /**
     * Handle the Education "force deleted" event.
     */
    public function forceDeleted(Registration $registration): void
    {
        //
    }
}
