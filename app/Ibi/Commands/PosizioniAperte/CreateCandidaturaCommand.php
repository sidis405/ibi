<?php

namespace Ibi\Commands\PosizioniAperte;

use Ibi\Commands\Command;

class CreateCandidaturaCommand extends Command
{
    public $posizione_id;
    public $nome;
    public $cognome;
    public $email;
    public $messaggio;
    public $cv_path;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($posizione_id, $nome, $cognome, $email, $messaggio, $cv_path)
    {
        
        
        $this->posizione_id = $posizione_id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->messaggio = $messaggio;
        $this->cv_path = $cv_path;
    }
}
