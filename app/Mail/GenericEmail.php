<?php

namespace eHOSP\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GenericEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msgTitle, $msgBody, $msgGoodbye)
    {
        $this->msgTitle = $msgTitle;
        $this->msgBody = $msgBody;
        $this->msgGoodbye = $msgGoodbye;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.generic-email')
                    ->with([
                        'msgTitle' => $this->msgTitle,
                        'msgBody' => $this->msgBody,
                        'msgGoodbye' => $this->msgGoodbye,
                    ]);
    }
}
