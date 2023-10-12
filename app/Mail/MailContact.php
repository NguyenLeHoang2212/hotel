<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $subject;
    public $name;
    public $yourmessage;
    public function __construct($email,$subject,$name,$yourmessage)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->name = $name;
        $this->yourmessage = $yourmessage;


    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Messages',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mail-contact',
            with: ['email' => $this->email, 'name' => $this->name,'subject' => $this->subject,'yourmessage' => $this->yourmessage]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}