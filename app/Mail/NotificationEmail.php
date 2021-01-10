<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$tel,$formation)
    {
        $this->name = $name; //nom
        $this->email = $email;  //tel
        $this->tel = $tel; //
        $this->formation=$formation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.NotificationEMail')->with([
            'name'=>$this->name,
            'email' => $this->email,
            'tel' => $this->tel,
            'formation' => $this->formation,



        ]);;
    }
}
