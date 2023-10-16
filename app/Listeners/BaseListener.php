<?php

namespace App\Listeners;

use IPPanel\Client;
use IPPanel\Errors\Error;
use IPPanel\Errors\HttpException;

class BaseListener
{
    /**
     * Send SMS By FARAZAMAN_SMS_PANEL
     * @param string $patternCode
     * @param string $resipientNumber
     * @param array $patternValues
     * @return void
     * @throws Error
     * @throws HttpException
     */
    public function FARAZAMAN_SMS_PANEL(string $patternCode, string $resipientNumber, array $patternValues)
    {
        $client = new Client(env('FARAZAMAN_SMS_PANEL_API',null));

        $messageId = $client->sendPattern(
            $patternCode,    // pattern code
            env("SMS_SENDER_NUMBER", null),      // originator
            $resipientNumber,  // recipient
            $patternValues  // pattern values
        );
    }
}
