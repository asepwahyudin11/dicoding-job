<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecruiterEmail extends Mailable
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
                    ->subject('Anda mendapatkan lamaran baru untuk posisi '.$this->data['title'].'.')
                    ->view('emails.recruiter')
                    ->with(
                    [
                        'name' => $this->data['name'],
                        'title' => $this->data['title'],
                        'company' => $this->data['company']
                    ]);
    }
}
