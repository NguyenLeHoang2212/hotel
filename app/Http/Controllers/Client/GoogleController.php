<?php

namespace App\Http\Controllers\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class GoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request){
        $googleUser = Socialite::driver('google')->user();
        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName(),
                'google_user_id' => $googleUser->getId(),
                'password' => Hash::make('password'.'@'.$googleUser->getId()),
            ]
        );
        Auth::login($user);
        return redirect()->route('home');
    }
}
