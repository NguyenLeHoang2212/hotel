<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';


    public function booking_items(){
        return $this->hasMany(BookingRoom::class, 'bkg_id');
    }

    public function booking_payment_methods(){
        return $this->hasMany(BookingPaymentMethod::class, 'bkg_id');
    }
}
