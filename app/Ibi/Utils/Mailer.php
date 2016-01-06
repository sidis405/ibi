<?php

namespace Ibi\Utils;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use \Illuminate\Mail\Mailer as Mail;

class Mailer {


    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }


    public function sendMailForExternalUserCreation($utente)
    {

        $subject = "Un nuovo " . $utente->roles[0]->name . ' si è registato su ibi-lorenzini.com';
        $view = "emails.nuovo_utente";
        $data = compact('utente');

        \Log::info('sending admin new user email');

        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo('forge405@gmail.com', $subject, $view, $data);

    }

    public function sendMailForAccountActivation($utente)
    {

        $subject = "Il tuo account su ibi-lorenzini.com è attivo";
        $view = "emails.account_attivato";
        $data = compact('utente');

        \Log::info('sending user account activation');

        // $this->sendTo('forge405@gmail.com', $subject, $view, $data);
        $this->sendTo($utente->email, $subject, $view, $data);
    }

    public function sendTo($recipient, $subject, $view, $data = [])
    { 
        $this->mail->queue($view, $data, function($message) use($recipient, $subject){
            $message->to($recipient)->subject($subject);
        });
    }

}
