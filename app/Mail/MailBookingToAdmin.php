<?php

namespace App\Mail;
use App\Models\Booking;
use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailBookingToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name_user;
    public $room_type;
    public $name;
    public $phone;
    public $total;
    public $arrival_date;
    public $depature_date;
    public $booking_id;
    public function __construct($email, $name_user, $name, $room_type, $total,$phone,$booking_id,$arrival_date,$depature_date)
    {
        $this->email = $email;
        $this->name_user = $name_user;

        $this->name = $name;
        $this->room_type = $room_type;
        $this->total = $total;
        $this->phone = $phone;
        $this->booking_id = $booking_id;
        $this->arrival_date = $arrival_date;
        $this->depature_date = $depature_date;


    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mailbooking-to-admin',
            with:['email' => $this->email,'name_user' => $this->name_user,'name' => $this->name,'room_type' => $this->room_type,
            'total' => $this->total,'phone' => $this->phone,'booking_id' => $this->booking_id,'depature_date' => $this->depature_date,
            'arrival_date' => $this->arrival_date]
        );
    }
}
