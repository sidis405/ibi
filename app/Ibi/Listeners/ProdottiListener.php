<?php

namespace Ibi\Listeners;

use Ibi\Events\Prodotti\ProdottoWasCreated;
use Ibi\Events\Prodotti\ProdottoWasUpdated;
use Ibi\Utils\Mailer;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ProdottiListener
{

    public $mailer;

    function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }
    /**
     * Handle product user creation
     */
    public function onProdottoCreation(ProdottoWasCreated $event) {


        $this->mailer->sendMailForProdottoCreation($event->prodotto);

    }

    /**
     * Handle external prodotto updating
     */
    public function onProdottoUpdate(ProdottoWasUpdated $event) {

        $this->mailer->sendMailForProdottoUpdate($event->prodotto);

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
            'Ibi\Events\ExternalUsers\ProdottoWasCreated',
            'Ibi\Listeners\ProdottiListener@onProdottoCreation'
        );

        $events->listen(
            'Ibi\Events\ExternalUsers\ProdottoWasUpdated',
            'Ibi\Listeners\ProdottiListener@onProdottoUpdate'
        );
    }

}
