<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailExemplo extends Mailable
{
    use Queueable, SerializesModels;

    public $detalhes;

    public function __construct($detalhes)
    {
        $this->detalhes = $detalhes;
    }

    public function build()
    {
        return $this->subject('Assunto do Email')
                    ->view('emails.exemplo');
    }
}
