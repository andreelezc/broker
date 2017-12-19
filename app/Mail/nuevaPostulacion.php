<?php

namespace inetweb\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class nuevaPostulacion extends Mailable
{
    use Queueable, SerializesModels;
    public $productor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $productor)
    {
         $this->productor = $productor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.usuarios.nuevaPostulacionOportunidad')->with([
                'address' => $this->productor ]);
    }
}
