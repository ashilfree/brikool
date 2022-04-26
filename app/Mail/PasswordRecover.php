<?php

namespace App\Mail;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordRecover extends Mailable
{
    use Queueable, SerializesModels;

    private $member;
    private $token;

    /**
     * Create a new message instance.
     *
     * @param Member $member
     * @param $token
     */
    public function __construct(Member $member, $token)
    {
        $this->member = $member;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Please verify your email address.";
        return $this
            ->subject($subject)
//            ->view('api.emails.verification');
//            ->view('api.emails.verification1');
//            ->view('api.emails.verification2');
//            ->view('api.emails.verification3');
//            ->view('api.emails.verification4');
//            ->view('api.emails.verification5');
            ->view('api.emails.verification2')
            ->with(['member' => $this->member, 'token' => $this->token]);
    }
}
