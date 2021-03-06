<?php

namespace App\Providers;

use App\Events\MemberCreated;
use App\Events\PasswordRecovery;
use App\Listeners\NotifyMemberCreated;
use App\Listeners\SendRecoveryEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MemberCreated::class => [
            NotifyMemberCreated::class
        ],
        PasswordRecovery::class => [
            SendRecoveryEmail::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
