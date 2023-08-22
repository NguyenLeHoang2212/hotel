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
Route::get('cart',function(){
    return view('client.pages.cart');
});
Route::get('blog',function(){
    return view('client.pages.blog');
});
Route::get('home',function(){
    return view('client.pages.home');
});
Route::get('admin/product',function(){
    return view('admin.pages.product.list');
});
Route::get('hero-section',function(){
    return view('client.pages.hero-section');
});
Route::get('productlist',function(){
    return view('admin.pages.product');
});
Route::get('detail',function(){
    return view('client.pages.blog.detail');
});
Route::get('admin',function(){
    return view('admin.layout.master');
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
