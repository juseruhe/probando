<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PdfMail extends Mailable
{
    use Queueable, SerializesModels;


    public $subject = "Sebastian Ruiz";

    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('personas')
        ->attach($this->msg["archivo"]->getRealPath(),[
            "as" => $this->msg["archivo"]->getClientOriginalName()
        ]);

        
    }
}
