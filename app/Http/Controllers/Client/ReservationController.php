<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function reservation1($id){
        // $bookings = DB::select('select * from bookings where id = ?', [$id]);

        $rooms = DB::select('select * from rooms where id = ?', [$id]);

        return view('client.pages.booking.step1',['rooms' => $rooms]);
    }
    public function reservation2($id){
        // $bookings = DB::select('select * from bookings where id = ?', [$id]);
        $rooms = DB::select('select * from rooms where id = ?', [$id]);

        return view('client.pages.booking.step2',['rooms' => $rooms]);
    }
    public function reservation3(){
        // $bookings = DB::select('select * from bookings where id = ?', [$id]);
        // $rooms = Room::findOrFail($id);
        // $lists = session()->get('lists') ?? [];
        // $imagesLink = is_null($rooms->image) || !file_exists('images/' . $rooms->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $rooms->image);

        // $lists[$id] = [
        //     'name' => $rooms->name,
        //     'price' => $rooms->price,
        //     'image' => $imagesLink,

        //     'room_type' => $rooms->room_type,
        //     "created_at" => Carbon::now()

        // ];
        // session()->put('lists', $lists);
        // return view('client.pages.booking.step3',['lists' => $lists]);
        $bookings = DB::select('select * from bookings where user_id = ?', [Auth::user()->id]);

        return view('client.pages.booking.step3',['bookings' => $bookings]);
    }
}
