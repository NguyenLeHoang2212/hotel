<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function reservation1($id){
        $bookings = DB::select('select * from bookings where id = ?', [$id]);
        $rooms = DB::select('select * from rooms where id = ?', [$id]);

        return view('client.pages.booking.step1',['bookings' => $bookings , 'rooms' => $rooms]);
    }
    public function reservation2($id){
        $bookings = DB::select('select * from bookings where id = ?', [$id]);
        $rooms = DB::select('select * from rooms where id = ?', [$id]);

        return view('client.pages.booking.step2',['bookings' => $bookings , 'rooms' => $rooms]);
    }
    public function reservation3($id){
        dd(1);
        $bookings = DB::select('select * from bookings where id = ?', [$id]);
        $rooms = DB::select('select * from rooms where id = ?', [$id]);

        return view('client.pages.booking.step2',['bookings' => $bookings , 'rooms' => $rooms]);
    }
}