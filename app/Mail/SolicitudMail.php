<?php

namespace App\Mail;

use App\Models\Solicitud;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SolicitudMail extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitudCall;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Solicitud $solicitudCall)
    {
        $this->solicitudCall = $solicitudCall;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.aprobado');

    }
    // public function solicituds()
    // {
    //     return $this->belongsTo(Soicitud::class, 'id');
    // }

}
