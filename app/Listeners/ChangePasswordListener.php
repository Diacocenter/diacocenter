<?php

namespace App\Listeners;

use App\Mail\ChangePasswordMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ChangePasswordListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        if ($event->user->email) {
            Mail::to($event->user->email)->send(new ChangePasswordMail($event->user));
        }
        info("ChangePasswordMailListener is fired for Email address: $event->user");
    }
}