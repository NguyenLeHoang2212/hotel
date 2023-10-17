<?php

namespace App\Http\Controllers\Client;

use App\Events\CheckOutRoom;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\BookingPaymentMethod;
use App\Models\BookingRoom;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListBookingController extends Controller
{
    public function checkoutRoom(Request $request){




            $result = DB::table('bookings')->insert([
                "bkg_id" =>Auth::user()->id,
                "user_id" => Auth::user()->id,
                "email" => Auth::user()->email,

                "ph_number" => Auth::user()->phone,


                "name" => $request->name,
                "room_type" => $request->room_type,
                "total" => $request->total,

                "arrival_date" => $request->arrival_date,

                "depature_date" => $request->depature_date,

                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),

            ]);
            $message = $result ? "add success  " : "failed" ;
                return redirect()->route('reservation3')->with('message',$message);
    }
}
