<?php

namespace papertracker\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'papertracker\Events\SomeEvent' => [
            'papertracker\Listeners\LogoutListener',
        ],
    ];

    protected $subscribe = ['papertracker\Listeners\LogoutListener'];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
