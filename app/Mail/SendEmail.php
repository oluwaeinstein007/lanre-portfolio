<?php

namespace App\Mail;
use App\Models;
use App\Models\NotifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\NotifyEmailController\Request;



class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        //
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@tramango.com', 'No-reply')->subject('Booking Confirmation for David')->view('emails.send')->with('mailData', $this->mailData);
    }
}
