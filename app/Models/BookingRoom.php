<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    use HasFactory;
    protected $table = 'bookings_rooms';

    public function booking(){
        return $this->belongsTo(Booking::class, 'bkg_id');
    }

    public function room(){
        return $this->belongsTo(Room::class, 'room_id');
    }
}