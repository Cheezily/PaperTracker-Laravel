<?php

namespace papertracker\Listeners;

use papertracker\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogoutListener
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function subscribe($events)
    {

         $events->listen(
             'Illuminate\Auth\Events\Logout',
             'papertracker\Listeners\LogoutListener@onUserLogout'
         );
    }

    public function onUserLogout($event) {
        dd($event);
    }
}
