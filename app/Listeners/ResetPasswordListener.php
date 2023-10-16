<?php

namespace App\Listeners;

use App\Mail\ResetPasswordMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ResetPasswordListener
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
            Mail::to($event->user->email)->send(new ResetPasswordMail($event->user, $event->token));
        }
        info("ResetPasswordMaillListener is fired for Email address: $event->user");
    }
}
