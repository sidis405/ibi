<?php

namespace Ibi\Events\PrincipiAttivi;

use Event;
use Ibi\Models\PrincipiAttivi;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PrincipioAttivoWasUpdated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PrincipiAttivi $principio_attivo)
    {
        $this->principio_attivo = $principio_attivo;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
