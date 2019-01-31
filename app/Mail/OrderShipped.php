<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $attachmentFile = storage_path('template_presentation.pptx');

        return $this->from('sofien.sahli@esprit.tn')
            ->view('mails_views.notification_mail_view')
            ->attach($attachmentFile, [
                'as' => 'template_presentation.pptx',
                'mime' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation'

            ]);
    }
}
