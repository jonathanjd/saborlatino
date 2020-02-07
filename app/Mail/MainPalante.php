<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MainPalante extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $myMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $myMessage)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->myMessage = $myMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.send')
        ->with('name', $this->name)
        ->with('email', $this->email)
        ->with('myMessage', $this->myMessage);
    }
}
