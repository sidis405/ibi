<?php

namespace Ibi\Listeners;

use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Ibi\Events\ExternalUsers\ExternalUserWasCreated;

class ExternalUsersListener
{
    /**
     * Handle extrnal user ceration
     */
    public function onExternalUserCreation(ExternalUserWasCreated $event) {
        logger($event->user);
        logger($event->user->profile);
    }


    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(
            'Ibi\Events\ExternalUsers\ExternalUserWasCreated',
            'Ibi\Listeners\ExternalUsersListener@onExternalUserCreation'
        );
    }

}
