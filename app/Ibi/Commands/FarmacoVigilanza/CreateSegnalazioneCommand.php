<?php

namespace Ibi\Commands\FarmacoVigilanza;

use Ibi\Commands\Command;

class CreateSegnalazioneCommand extends Command
{
    public $nome;
    public $cognome;
    public $dob;
    public $email;
    public $messaggio;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nome, $cognome, $dob, $email, $messaggio)
    {
        
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->dob = $dob;
        $this->messaggio = $messaggio;
    }
}
