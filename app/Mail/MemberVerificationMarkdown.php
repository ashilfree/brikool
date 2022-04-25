<?php

namespace App\Mail;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MemberVerificationMarkdown extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Member
     */
    private $member;
    private $verification_code;

    /**
     * Create a new message instance.
     *
     * @param Member $member
     * @param $verification_code
     */
    public function __construct(Member $member, $verification_code)
    {
        $this->member = $member;
        $this->verification_code = $verification_code;
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
            ->markdown('api.emails.verification-markdown')
            ->with(['member' => $this->member, 'verification_code' => $this->verification_code]);
    }
}
