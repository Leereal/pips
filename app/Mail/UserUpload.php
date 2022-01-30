<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserUpload extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $doc1 = 'upload-' . $this->data['document']->getClientOriginalName() . time();
        return $this->markdown('emails.user_upload')
        ->subject('Successful Deposit')
        ->attach($this->data['document']->getRealPath(), [
            'as' => $doc1,
            'mime' => $this->data['document']->getClientMimeType(),
        ]);
    }
}
