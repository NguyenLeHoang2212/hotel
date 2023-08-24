<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
class UserController extends Controller
{
    public function index(){

        $users = DB::select('select * from users');

        $test = 'ccc';

        // $users = [ 1 , 2 , 3, 4, 5];
        //cach 1
        // return view('admin.pages.user.list',['users'=> $users,'test'=>'Bom']);

        //cach 2
        // return view('admin.pages.user.list')
        // ->with('user',$users)
        // ->with('test','khadan');

        //cach 3
        return view('admin.pages.user.list',compact('users','test'));
    }
}
