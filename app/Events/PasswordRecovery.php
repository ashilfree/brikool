<?php

namespace App\Events;

use App\Models\Member;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PasswordRecovery
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Member
     */
    public $member;
    public $token;

    /**
     * Create a new event instance.
     *
     * @param Member $member
     * @param $token
     */
    public function __construct(Member $member, $token)
    {
        $this->member = $member;
        $this->token = $token;
    }
}
