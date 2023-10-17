<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'booking_payment_methods';

    public function booking(){
        return $this->belongsTo(Booking::class,'bkg_id');
    }
}
