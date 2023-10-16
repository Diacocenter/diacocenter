<?php

namespace App\Observers;

use App\Models\CommunicationRecord;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserCommunicationObserver
{
    /**
     * Handle the CommunicationRecord "created" event.
     */
    public function created(CommunicationRecord $communicationRecord): void
    {
        if ($communicationRecord->user_id === auth()->user()->id){
            $communicationRecord->is_read = true;
        }
    }

    /**
     * Handle the CommunicationRecord "updated" event.
     */
    public function updated(CommunicationRecord $communicationRecord): void
    {
        //
    }

    /**
     * Handle the CommunicationRecord "deleted" event.
     */
    public function deleted(CommunicationRecord $communicationRecord): void
    {
        //
    }

    /**
     * Handle the CommunicationRecord "restored" event.
     */
    public function restored(CommunicationRecord $communicationRecord): void
    {
        //
    }

    /**
     * Handle the CommunicationRecord "force deleted" event.
     */
    public function forceDeleted(CommunicationRecord $communicationRecord): void
    {
        //
    }
}
