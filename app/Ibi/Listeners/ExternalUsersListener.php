<?php

namespace Ibi\Listeners;

use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Ibi\Events\ExternaUsers\ExternaUserWasCreated;

class ExternalUsersListener
{
    /**
     * Handle extrnal user ceration
     */
    public function onLinkCreation(ExternaUserWasCreated $event) {
        $this->dispatch(new PostProcessLink($event));
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
            'Ibi\Events\ExternaUsers\ExternaUserWasCreated',
            'Ibi\Listeners\ExternalUsersListener@onExternalUserCreation'
        );
    }

}
