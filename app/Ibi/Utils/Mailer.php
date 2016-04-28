<?php

namespace Ibi\Utils;

use Ibi\Models\Options;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Queue\InteractsWithQueue;
use \Illuminate\Mail\Mailer as Mail;


class Mailer {

    //External user mail
    //contenuto update mail
    //nuova segnalazione mail
    //nuova candidatura mail


    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
        $this->options = Options::first();
    }


    public function sendMailForExternalUserCreation($utente)
    {

        $subject = "Un nuovo " . $utente->roles[0]->name . ' si è registato su ibi-lorenzini.it';
        $view = "emails.nuovo_utente";
        $data = compact('utente');

        // dd($data['utente']->profile[0]->ruolo);

        \Log::info('sending admin new user email');

        $this->sendTo($this->options->external_user_mail, $subject, $view, $data);

    }

    public function sendMailForContenutoUpdate($contenuto)
    {

        $subject = "Un nuovo contenuto è stato modificato su ibi-lorenzini.it";
        $view = "emails.contenuto_modificato";
        $data = compact('contenuto');

        // logger($contenuto->translations->freshVersion());

        // dd($data['utente']->profile[0]->ruolo);

        \Log::info('sending admin new updata email');

        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo($this->options->contenuto_update_mail, $subject, $view, $data);

    }


    public function sendMailForAccountActivation($utente)
    {

        $subject = "Il tuo account su ibi-lorenzini.it è attivo";
        $view = "emails.account_attivato";
        $data = compact('utente');

        \Log::info('sending user account activation');

        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo($utente->email, $subject, $view, $data);
    }

    public function sendMailForProdottoCreation($prodotto)
    {

        $subject = "Un nuovo prodotto è stato creato su ibi-lorenzini.it";
        $view = "emails.nuovo_prodotto";
        $data = compact('prodotto');


        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo('forge405@gmail.com', $subject, $view, $data);

    }


    public function sendMailForProdottoUpdate($prodotto)
    {

        $subject = "Un prodotto è stato modificato su ibi-lorenzini.it";
        $view = "emails.prodotto_modificato";
        $data = compact('prodotto');


        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
    }

    public function sendMailForSegnalazioneCreation($segnalazione)
    {

        $subject = "Una nuova segnalazione Farmaco Vigilanza ibi-lorenzini.it";
        $view = "emails.nuova_segnalazione";
        $data = compact('segnalazione');

        \Log::info('sending admin segnalazione');

        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo($this->options->segnalazione_farmacovigilanza_mail, $subject, $view, $data);

    }

    public function sendMailForCandidatura($candidatura)
    {

        $subject = "Una nuova candidatura ricevuta per posizione aperta su ibi-lorenzini.it";
        $view = "emails.nuova_candidatura";
        $data = compact('candidatura');

        \Log::info('sending admin candidatura');

        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo($this->options->candidatura_mail, $subject, $view, $data);

    }

    public function sendTo($recipient, $subject, $view, $data = [])
    { 
        $this->mail->queue($view, $data, function($message) use($recipient, $subject){
            $message->to($recipient)->subject($subject);
        });
    }

}
