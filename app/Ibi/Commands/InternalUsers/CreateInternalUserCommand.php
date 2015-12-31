<?php

namespace Ibi\Commands\InternalUsers;

use Ibi\Commands\Command;

class CreateInternalUserCommand extends Command
{

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
    public function __construct($first_name, $last_name, $email, $password, $ruolo, $active)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->ruolo = $ruolo;
        $this->active = $active;
    }
}
