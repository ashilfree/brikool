<?php

namespace App\Listeners;

use App\Events\MemberCreated;
use App\Mail\MemberVerification;
use App\Mail\MemberVerificationMarkdown;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyMemberCreated
{

    /**
     * Handle the event.
     *
     * @param MemberCreated $event
     * @return void
     */
    public function handle(MemberCreated $event)
    {
        Mail::to($event->member)
            ->queue(
            new MemberVerification($event->member, $event->verification_code)
        );
    }
}
