<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BienvenidaCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $address = 'admin@MrRedisenador.com';
        $subject = 'MrResenadores';
        $name = 'Soy el mero atole';

        return $this->view('emails.email')
                    ->from($address)
                    ->subject($subject)
                    ->with([ 'test_message' => $this->user ]);
    }
}
