<?php

namespace App\Providers;

use Ibi\Listeners\ExternalUsersListener;
use Ibi\Listeners\SegnalazioniFarmacoVigilanzaListener;
use Ibi\Listeners\ProdottiListener;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Auth\Events\Login' => [
            'Ibi\Listeners\LogSuccessfulLogin',
        ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        ExternalUsersListener::class,
        SegnalazioniFarmacoVigilanzaListener::class,
        ProdottiListener::class,
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

        // \Event::listen('*', function()
        // {
        //     $event = \Event::firing();
        //     if(starts_with($event, "Ibi\Events")) {
        //         \Log::info("Event fired: " . $event . "\n");
        //     }
        // });
    }
}
