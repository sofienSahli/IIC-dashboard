<?php

namespace App\Mail;

use App\Entities\Deadline;
use App\Entities\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StartuperAccountActivated extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $deadline;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param Deadline $deadline
     */
    public function __construct(User $user, Deadline $deadline)
    {
        $this->user = $user;
        $this->deadline = $deadline;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails_views.mail_for_uploading_template')->with(['url' => config('app.url')]);
    }
}
