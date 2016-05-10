<?php

namespace Ibi\Listeners;

use Ibi\Events\FarmacoVigilanza\SegnalazioneWasCreated;
use Ibi\Utils\Mailer;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;

class SegnalazioniFarmacoVigilanzaListener
{

    public $mailer;

    function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }
    /**
     * Handle external user creation
     */
    public function onSegnalazioneCreation(SegnalazioneWasCreated $event) {

        logger('seg');
        $this->mailer->sendMailForSegnalazioneCreation($event->segnalazione);

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
            'Ibi\Events\FarmacoVigilanza\SegnalazioneWasCreated',
            'Ibi\Listeners\SegnalazioniFarmacoVigilanzaListener@onSegnalazioneCreation'
        );
    }

}
