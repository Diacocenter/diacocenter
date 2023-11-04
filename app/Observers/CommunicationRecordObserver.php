<?php

namespace App\Observers;

use App\Events\MessageEvent;
use App\Models\CommunicationRecord;
use App\Models\User;
use Carbon\Carbon;

class CommunicationRecordObserver
{
    /**
     * Handle the communicationRecord "created" event.
     */
    public function created(CommunicationRecord $communicationRecord): void
    {
        event(new MessageEvent($communicationRecord->message, $communicationRecord->created_at->diffForHumans(),
            User::find($communicationRecord->user_id)->name,$communicationRecord->user_id === auth()->user()->id ? true : false,$communicationRecord->seen ? true : false));
    }

    /**
     * Handle the communicationRecord "updated" event.
     */
    public function updated(communicationRecord $communicationRecord): void
    {
        //
    }

    /**
     * Handle the communicationRecord "deleted" event.
     */
    public function deleted(communicationRecord $communicationRecord): void
    {
        //
    }

    /**
     * Handle the communicationRecord "restored" event.
     */
    public function restored(communicationRecord $communicationRecord): void
    {
        //
    }

    /**
     * Handle the ConversationRecord "restored" event.
     *
     * @param  \App\Models\CommunicationRecord  $communicationRecord
     * @return void
     */
    public function retrieved(CommunicationRecord $communicationRecord)
    {
        if($communicationRecord->user_id <> auth()->user()->id) {
            $communicationRecord->update(["seen" => Carbon::now()]);
        }
    }

    /**
     * Handle the communicationRecord "force deleted" event.
     */
    public function forceDeleted(communicationRecord $communicationRecord): void
    {
        //
    }
}
