<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{



    public function index()
    {
        $arrayDatas = [];
        $arrayDatas[] =  ['Order Status', 'Number'];
        $dataOrders = DB::table('orders')
            ->selectRaw('status, count(status) as number')
            ->groupBy('status')
            ->get();

        foreach ($dataOrders as $data) {
            $arrayDatas[] = [$data->status, $data->number];
        }
        // dd($arrayDatas);

        //////////////////////////////////////////
        $totalRegister = DB::table('users')
            ->where('role', '0')
            ->selectRaw('count(role) as totalRegister')
            ->groupBy('role')
            ->get()
            ->first();


        $totalOrder = DB::table('orders')
            ->selectRaw('count(id) as totalOrder')
            ->get()
            ->first();

        $totalAppointment = DB::table('bookings')
            ->selectRaw('count(id) as totalAppointment')
            ->get()
            ->first();



        //////////////////////////////////////////////////


        //////////////////////////////////////

        ////////////////////////////////////////////////////////////

        // dd($booking_per_doctor);
        return view(
            'admin.pages.dashboard',
            [
                'arrayDatas' => $arrayDatas,
                'totalRegister' => $totalRegister,
                'totalOrder' => $totalOrder,
                'totalAppointment' => $totalAppointment,

            ]
        );
    }
}