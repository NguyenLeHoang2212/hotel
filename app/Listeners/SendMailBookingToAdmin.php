<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CheckOutRoom;
use App\Mail\MailBookingToAdmin;
use Illuminate\Support\Facades\Mail;

class SendMailBookingToAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CheckOutRoom $event): void
    {
        $email = $event->email ;
        $name_user = $event->name_user;
        $room_type = $event->room_type;
        $name = $event->name;
        $phone = $event->phone;
        $total = $event->total;
        $arrival_date = $event->arrival_date;
        $depature_date = $event->depature_date;
        $booking_id = $event->booking_id;
        Mail::to('hoang19992212@gmail.com')->send(new MailBookingToCustomer($email, $name_user, $name, $room_type, $total,$phone,$booking_id,$arrival_date,$depature_date));
    }
}