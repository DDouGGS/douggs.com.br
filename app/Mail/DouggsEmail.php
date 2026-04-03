<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Mail;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\PendingMail;

class DouggsEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;

    protected $title = "E-mail do site";

    protected $email;

    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, $email = null, $message = null)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->message = $message;
    }

    public static function make(string $name, $email = null, $message = null)
    {
        return new DouggsEmail($name, $email, $message);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)
            ->from($this->email, $this->name)
            ->html(sprintf('<p>%s</p>', $this->message))
            ->with([
                'name' => $this->name,
            ]);
    }
}
