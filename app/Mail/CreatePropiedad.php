<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreatePropiedad extends Mailable
{
    use Queueable, SerializesModels;

    public $propiedad;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($propiedad)
    {
        $this->propiedad    = $propiedad;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');
        return $this
            ->from('noresponder@azzul.net.ar', 'HousesView')
            ->subject('¡Se ha creado una Propiedad!')
            ->view('mails.createPropiedad');
    }
}
