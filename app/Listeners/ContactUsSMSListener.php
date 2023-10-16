<?php

namespace App\Listeners;

use App\Events\ContactUsEvent;
use Illuminate\Support\Facades\App;


class ContactUsSMSListener extends BaseListener
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
        $patternValues = [
            "first_name" => $event->contactUs->first_name ?? "User",
        ];
        if (!App::isLocal()) {
            foreach ([env("SMS_RECIPIENT_1", null), env("SMS_RECIPIENT_2", null), env("SMS_RECIPIENT_3", null)] as $item) {
                if ($item) {
                    $this->FARAZAMAN_SMS_PANEL(env("FARAZ_PATTERN_CONTACT_US", null), $item, $patternValues);
                }
            }
        }
    }
}
