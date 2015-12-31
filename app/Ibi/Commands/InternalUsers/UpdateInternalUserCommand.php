<?php

namespace Ibi\Commands\InternalUsers;

use Ibi\Commands\Command;

class UpdateInternalUserCommand extends Command
{

    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $ruolo;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($user_id, $first_name, $last_name, $email, $password = null, $ruolo, $active)
    {
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->ruolo = $ruolo;
        $this->active = $active;
    }

}
