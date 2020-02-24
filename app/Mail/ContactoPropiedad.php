<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contactos;

class ContactoPropiedad extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contacto;
    public $propiedad;
    public $cliente;

    public function __construct($contacto, $propiedad, $cliente)
    {

//        echo json_encode($contacto); die();
        $this->contacto     = $contacto;
        $this->propiedad    = $propiedad;
        $this->cliente      = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('noresponder@azzul.net.ar', 'HousesView')
            ->subject('¡Te han contacto por una Propiedad!')
            ->view('mails.contacto');
    }
}
