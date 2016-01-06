<?php

namespace Ibi\Listeners;

use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Ibi\Events\ExternalUsers\ExternalUserWasCreated;
use Ibi\Events\ExternalUsers\ExternalUserWasUpdated;

class ExternalUsersListener
{
    /**
     * Handle external user creation
     */
    public function onExternalUserCreation(ExternalUserWasCreated $event) {
        logger('user created');
        logger($event->user);
        logger($event->user->profile);
        // SPEDISCI MAIL
    }

    /**
     * Handle external user updating
     */
    public function onExternalUserUpdate(ExternalUserWasUpdated $event) {
        logger('user updated');
        logger($event->user);
        logger($event->user->profile);
        // CONTROLLA SE HA RICEVUTO MAIL PER ATTIVAZIONE
        // SPEDISCI MAIL
        // MARCHIA PROFILE COME INVIATO MAIL
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

        $events->listen(
            'Ibi\Events\ExternalUsers\ExternalUserWasUpdated',
            'Ibi\Listeners\ExternalUsersListener@onExternalUserUpdate'
        );
    }

}
