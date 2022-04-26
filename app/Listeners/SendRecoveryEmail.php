<?php

namespace App\Listeners;

use App\Mail\PasswordRecover;
use Illuminate\Support\Facades\Mail;

class SendRecoveryEmail
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->member)
            ->queue(
                new PasswordRecover($event->member, $event->token)
            );
    }
}
