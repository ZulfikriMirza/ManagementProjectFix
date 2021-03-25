<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class UserComment extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($fromName, $comment, $email = null)
    {
        $this->comment = $comment;
        $this->fromName = $fromName;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $comment = join(" <br> ", explode("\r\n", $this->comment));
        return $this->subject("[ ARSITEKKU ] Message From : $this->fromName")
            ->view('mail')
            ->with([
                'fromName' => $this->fromName,
                'fromEmail' => $this->email,
                'comment' => $comment,
            ]);
    }
}
