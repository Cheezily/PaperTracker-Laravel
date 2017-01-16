<?php

namespace papertracker\Listeners;

use papertracker\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

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
      if ($event->user) {
        $user = $event->user;
        $user->last_logout = DB::raw('CURRENT_TIMESTAMP');
        $user->save();
      }
    }
}
