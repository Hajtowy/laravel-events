<?php

namespace App\Listeners;

use App\Event\HomePageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HomePageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  HomePageEvent  $event
     * @return void
     */
    public function handle(HomePageEvent $event)
    {
        dump('Hello from listener ' . $event->name);
    }
}
