<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
    return view('test');
});
Route::get('test2',function(){
    return view('test2');
});
Route::get('master',function(){
    return view('client.layout.master');
});
Route::get('master-example',function(){
    return view('client.layout.master-example');
});
Route::get('productlist',function(){
    return view('admin.pages.product');
});
Route::get('detail',function(){
    return view('client.pages.blog.detail');
});
Route::get('khadan',function(){
    echo '<h2>oc<h2>';
});

Route::get('user/detail/{id}/{name?}',function($id,$name=''){
    // khong bat buoc co them ? : {name?}
    return "User detail : ".$id.$name;
});

// Route::get('product',function(Request $request){
//     echo 'Productlist '.$request->query('name');

// });