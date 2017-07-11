<?php

namespace eHOSP\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $from_address;
    public $subject;
    public $message_body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->from_address = request()->input('from_address');
        $this->subject = request()->input('subject');
        $this->message_body = request()->input('message_body');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact');
    }
}
