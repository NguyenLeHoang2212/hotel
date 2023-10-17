<?php

namespace App\Http\Controllers\Client;
// use App\Events\CheckOutRoom;

use App\Events\CheckOutRoom;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
// use App\Models\Booking;
// use App\Models\BookingPaymentMethod;
// use App\Models\BookingRoom;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\MailBookingToAdmin;
// use App\Mail\MailBookingToCustomer;


class CheckOutRoomController extends Controller
{
    public function checkoutBooking(){
        if(isset($_POST['checkout_booking'])){
            $email = $_POST['email'] ?? '';
            $name_user = $_POST['name_user'] ?? '';
            $name = $_POST['name'] ?? '';
            $room_type = $_POST['room_type'] ?? '';
            $total = $_POST['total'] ?? '';

            $phone = $_POST['phone'] ?? '';
            $booking_id = $_POST['booking_id'] ?? '';
            $arrival_date = $_POST['arrival_date'] ?? '';
            $depature_date = $_POST['depature_date'] ?? '';

            Mail::to(config('my-config.admin-email'))->send(new MailBookingToAdmin($email, $name_user, $name, $room_type, $total,$phone,$booking_id,$arrival_date,$depature_date));
            Mail::to('hoang19992212@gmail.com')->send(new MailToCustomer($email, $name_user, $name, $room_type, $total,$phone,$booking_id,$arrival_date,$depature_date));

            // event(new CheckOutRoom($email, $name_user, $name, $room_type, $total,$phone,$booking_id,$arrival_date,$depature_date));

            return redirect()->route('home');

            }

    }
}
