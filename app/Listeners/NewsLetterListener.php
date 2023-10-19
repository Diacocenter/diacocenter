<?php

namespace App\Listeners;

use App\Events\NewsLetterEvent;
use App\Mail\NewsLetterMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewsLetterListener
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
    public function handle(NewsLetterEvent $event): void
    {
        if ($event->newsLetter->newsletter_email) {
            Mail::to($event->newsLetter->newsletter_email)->send(new NewsLetterMail($event->newsLetter));
        }
        info("NewsletterMailListener is fired for Email address: $event->newsLetter->newsletter_email ");
    }
}
