<?php

namespace App\Events;

use App\Models\Member;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MemberCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Member
     */
    public $member;
    public $verification_code;

    /**
     * Create a new event instance.
     *
     * @param Member $member
     * @param $verification_code
     */
    public function __construct(Member $member, $verification_code)
    {
        $this->member = $member;
        $this->verification_code = $verification_code;
    }

}
