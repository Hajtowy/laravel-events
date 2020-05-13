<?php

namespace App\Providers;

use App\Listeners\VisitedEventSubscriber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
//        \App\Event\HomePageEvent::class => [
//            \App\Listeners\HomePageListener::class
//        ]
    ];

    protected $subscribe = [
        VisitedEventSubscriber::class
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Event::listen('event.homepage', function ($name) {
            dump('Hello from homepage ' . $name);
        });
    }
}
