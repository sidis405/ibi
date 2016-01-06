<?php

namespace Ibi\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Ibi\Events\ExternaUsers\ExternaUserWasCreated;
use Ibi\Handlers\Events\ExternaUsers\NotifyAdminOfExternalUser;

class IbiEventServiceProvider extends ServiceProvider {

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */

    protected $listen = [
    'Ibi\Events\ExternaUsers\ExternaUserWasCreated' => [
        'Ibi\Handlers\Events\ExternaUsers\NotifyAdminOfExternalUser',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        // \Event::listen('App\Events\ContactRequestReceived', 'App\Handlers\Events\NotifyAdminOfContactRequest');


    }

}
