<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SenderEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        $from = env("MAIL_FROM_ADDRESS", "operstox@gmail.com");

        return $this->from($from)
                    ->subject('Lamaran Anda ke '.$this->data['company'].' telah berhasil terkirim.')
                    ->view('emails.sender')
                    ->with(
                    [
                        'name' => $this->data['name'],
                        'title' => $this->data['title'],
                        'company' => $this->data['company']
                    ]);
    }
}
