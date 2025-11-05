<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public function __construct($data)
    {
        $this->mailData = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mailData["subject"],
            from: "coba@kumaro.khufra.my.id",
            to: $this->mailData["email"],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'send_email_template',
            with: [
                'name' => $this->mailData["name"],
                'email' => $this->mailData["email"],
                'password' => $this->mailData["password"],
                'confirm_password' => $this->mailData["confirm_password"],
                'birth_date' => $this->mailData["birth_date"],
                'subject' => $this->mailData["subject"],
                'userMessage' => $this->mailData["message"], // Renamed to userMessage
                'mailData' => $this->mailData,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}