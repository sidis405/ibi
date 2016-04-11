<?php

namespace Ibi\Listeners;

use Ibi\Events\Contenuti\ContenutoWasCreated;
use Ibi\Events\Contenuti\ContenutoWasUpdated;
use Ibi\Utils\Mailer;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ContenutiListener
{

    public $mailer;

    function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }


    /**
     * Handle external user updating
     */
    public function onContenutoUpdate(ContenutoWasUpdated $event) {

        logger('content updated');
  
        $this->mailer->sendMailForContenutoUpdate($event->contenuto);

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
            'Ibi\Events\Contenuti\ContenutoWasUpdated',
            'Ibi\Listeners\ContenutiListener@onContenutoUpdate'
        );
    }

}
