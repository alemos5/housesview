<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompraPlan extends Mailable
{
    use Queueable, SerializesModels;

    public $plan;
    public $planDuracion;
    public $orden;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($plan, $planDuracion, $orden)
    {
        $this->plan             = $plan;
        $this->planDuracion     = $planDuracion;
        $this->orden           = $orden;
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
            ->subject('¡Se ha comprado un Plan!')
            ->view('mails.compraPlan');
    }
}
