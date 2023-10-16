<?php

namespace App\Listeners;

use App\Events\RegistrationEvent;
use App\Mail\RegistrationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class RegistrationListener
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
    public function handle(RegistrationEvent $event): void
    {
        foreach ([env('MAIL_RECIPIENT_1', null), env('MAIL_RECIPIENT_2', null), env('MAIL_RECIPIENT_3', null), $event->user->email] as $recipient) {
            if ($recipient) {
                Mail::to($recipient)->send(new RegistrationMail($event->user));
            }
        }
        info("RegistrationMailListener is fired for Email address: $event->user");
    }
}
