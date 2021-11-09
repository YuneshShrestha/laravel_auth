<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AttachmentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.attachment')
            ->subject('How To Attach Images')
            ->attach(public_path('/images/default.jpg'),[
                'as'=>'testimage.jpg',
                'mime'=>'application/jpg'
            ]);

            // Here (as(setting new image name) and mime(image type)) array part are not compulsory 
    }
}
