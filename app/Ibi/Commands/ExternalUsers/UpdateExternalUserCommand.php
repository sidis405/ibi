<?php

namespace Ibi\Commands\ExternalUsers;

use Ibi\Commands\Command;

class UpdateExternalUserCommand extends Command
{

    public $user_id;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($user_id, $active)
    {
        $this->user_id = $user_id;
        $this->active = $active;
    }

}
