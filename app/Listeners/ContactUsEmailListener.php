<?php

namespace App\Listeners;

use App\Events\ContactUsEvent;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ContactUsEmailListener
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
    public function handle(ContactUsEvent $event): void
    {
        foreach ([env('MAIL_RECIPIENT_1', null), env('MAIL_RECIPIENT_2', null), env('MAIL_RECIPIENT_3', null), $event->contactUs->email] as $recipient) {
            if ($recipient) {
                Mail::to($recipient)->send(new ContactUsMail($event->contactUs));
            }
        }
        info("ContactMailListener is fired for Email address: $recipient");
    }
}
