<?php

namespace App\Observers;

use App\Events\ContactUsEvent;
use App\Models\ContactUs;

class ContactUsObserve
{
    /**
     * Handle the User "created" event.
     */
    public function created(ContactUs $contactUs)
    {
        ContactUsEvent::dispatch($contactUs);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(ContactUs $contactUs): void
    {
        // ...
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(ContactUs $contactUs): void
    {
        // ...
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(ContactUs $contactUs): void
    {
        // ...
    }

    /**
     * Handle the User "forceDeleted" event.
     */
    public function forceDeleted(ContactUs $contactUs): void
    {
        // ...
    }
}
