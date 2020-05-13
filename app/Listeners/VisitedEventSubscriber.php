<?php

namespace App\Listeners;

use App\Event\HomePageEvent;

class VisitedEventSubscriber
{
    public function showWelcomeText($event)
    {
        dump('Welcome ' . $event->email . ', how are you?');
    }

    public function visitLog(HomePageEvent $event)
    {
        dump('User ' . $event->name . ' visited home page.');
    }

    public function visitLog2(HomePageEvent $event)
    {
        dump('2 User ' . $event->name . ' visited home page.');
    }

    public function subscribe($events)
    {
        $events->listen(
            HomePageEvent::class,
            'App\Listeners\VisitedEventSubscriber@visitLog'
        );

        $events->listen(
            HomePageEvent::class,
            'App\Listeners\VisitedEventSubscriber@visitLog2'
        );
    }
}
