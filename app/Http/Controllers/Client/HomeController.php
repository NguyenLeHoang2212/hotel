<?php

namespace App\Http\Controllers\Client;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\MailContact;

class HomeController extends Controller
{
    public function allProduct(){
        $products = Product::orderBy('created_at','desc')->limit(16)->get();
        return view('client.pages.menu.allproduct',['products' => $products]);
    }
    public function index(){
        $products = Product::orderBy('created_at','desc')->limit(8)->get();
        return view('client.pages.menu.food',['products' => $products]);
    }
    public function index2(){
        $products = Product::orderBy('created_at','desc')->offset(8)->limit(8)->get();
        return view('client.pages.menu.drink',['products' => $products]);
    }
    public function home(){
        return view('client.pages.home.home-bookingintro');
    }
    public function contact(){
       
        if(isset($_POST['mailcontact'])){
        $email = $_POST['email'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $name = $_POST['name'] ?? '';

        Mail::to(config('my-config.admin-email'))->send(new MailContact($email,$subject,$name));

        return redirect()->route('home');

        }
    }

}
