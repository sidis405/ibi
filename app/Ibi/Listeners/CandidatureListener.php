<?php

namespace Ibi\Listeners;


use Ibi\Events\PosizioniAperte\CandidaturaWasCreated;
use Ibi\Utils\Mailer;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;

class CandidatureListener
{

    public $mailer;

    function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }


    /**
     * Handle external user updating
     */
    public function onCandidaturaCreation(CandidaturaWasCreated $event) {

        logger('content updated');
  
        $this->mailer->sendMailForCandidatura($event->camdidatura);

        // if($event->user->profile[0]->notifica_spedita == 0 && $event->user->active == 1 ){
        //     $this->mailer->sendMailForAccountActivation($event->user);
        //     $event->user->profile[0]->update(['notifica_spedita' => 1]);
        // }

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
            'Ibi\Events\PosizioniAperte\CandidaturaWasCreated',
            'Ibi\Listeners\CandidatureListener@onCandidaturaCreation'
        );
    }

}
