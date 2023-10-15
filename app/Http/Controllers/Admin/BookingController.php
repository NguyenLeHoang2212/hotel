<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function allbooking()
    {
        $allBookings = DB::table('bookings')->get();
        return view('admin.pages.booking.list',compact('allBookings'));
    }

    public function bookingAdd()
    {
        $data = DB::table('room_types')->get();
        $user = DB::table('users')->get();
        return view('admin.pages.booking.bookingadd',compact('data','user'));
    }

    public function bookingEdit($bkg_id)
    {
        $bookingEdit = DB::table('bookings')->where('bkg_id',$bkg_id)->first();
        return view('admin.pages.booking.bookingedit',compact('bookingEdit'));
    }

    public function saveRecord(BookingRequest $request)
    {




            $booking = new Booking();

            $booking->bkg_id = $request->bkg_id;

            $booking->name = $request->name;
            $booking->room_type     = $request->room_type;
            $booking->total_numbers  = $request->total_numbers;
            $booking->date  = $request->date;
            $booking->time  = $request->time;
            $booking->arrival_date   = $request->arrival_date;
            $booking->depature_date  = $request->depature_date;
            $booking->email       = $request->email;
            $booking->ph_number   = $request->ph_number;
            $booking->message     = $request->message;
            $result = $booking->save();
            $alert = $result ? 'create success' : 'create failed';
            return redirect()
            ->route('admin.allbooking')
            ->with('message', $alert);


    }

    // update record
    public function updateRecord(Request $request)
    {
        DB::beginTransaction();
        try {



            $update = [
                'bkg_id' => $request->bkg_id,
                'name'   => $request->name,
                'room_type'  => $request->room_type,
                'total_numbers' => $request->total_numbers,
                'date'   => $request->date,
                'time'   => $request->time,
                'arrival_date'   => $request->arrival_date,
                'depature_date'  => $request->depature_date,
                'email'   => $request->email,
                'ph_number' => $request->ph_number,
                'message'   => $request->message,
            ];

            Booking::where('bkg_id',$request->bkg_id)->update($update);

            DB::commit();
            return redirect()->route('admin.allbooking');
        } catch(\Exception $exception) {
            DB::rollback();
            return redirect()->back();
        }
    }

    // delete record booking
    public function deleteRecord($bkg_id)
    {
        $destroy = DB::delete('delete from bookings where id = ? ',[$bkg_id]);
        $message = $destroy>0 ? "sucess " : "failed" ;
        return redirect()->route('admin.allbooking')->with('message',$message);
    }


}
