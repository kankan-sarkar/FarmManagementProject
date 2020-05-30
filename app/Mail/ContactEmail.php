<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $subjectEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subjectEmail, $message)
    {
        $this->subjectEmail = $subjectEmail;
        $this->messageEmail = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kaveh.s@live.com')
            ->view('contactUsEmailTemplate')
            ->subject($this->subjectEmail)
            ->with(
                [
                    'msg' => $this->messageEmail,
                ]);
    }
}
