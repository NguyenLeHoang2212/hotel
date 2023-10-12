<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $arrayDatas = [];
        $arrayDatas[] =  ['Order Status', 'Number'];
        $dataOrders = DB::table('orders')

        ->selectRaw('status, count(status) as number')
        ->groupBy('status')
        ->get();

        foreach($dataOrders as $data){
            $arrayDatas[] = [$data->status, $data->number];
        }

        return view('admin.pages.dashboard', ['arrayDatas' => $arrayDatas]);
    }
}