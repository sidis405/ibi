<?php

namespace Ibi\Listeners;

use Ibi\Events\ExternalUsers\ExternalUserWasCreated;
use Ibi\Events\ExternalUsers\ExternalUserWasUpdated;
use Ibi\Utils\Mailer;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ExternalUsersListener
{

    public $mailer;

    function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }
    /**
     * Handle external user creation
     */
    public function onExternalUserCreation(ExternalUserWasCreated $event) {

        logger('user created');

        $this->mailer->sendMailForExternalUserCreation($event->user);

    }

    /**
     * Handle external user updating
     */
    public function onExternalUserUpdate(ExternalUserWasUpdated $event) {

        logger('user updated');
  
        if($event->user->profile[0]->notifica_spedita == 0 && $event->user->active == 1 ){
            $this->mailer->sendMailForAccountActivation($event->user);
            $event->user->profile[0]->update(['notifica_spedita' => 1]);
        }

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
