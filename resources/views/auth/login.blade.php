<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Title-->
    <title>Colina - Hotel, Resort</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/bootstrap.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/animate.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/awesome.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/hotel-icons.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/magnific-popup.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/owl.carousel.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/datepicker.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/theme.css') }}"  />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">

    <style>
        .loginuser{
            display: flex;
            width: 80%;
            margin:0 auto;
        }
        .left{
            width: 60%;
        }
        .right{
            width: 40%;
        }
    </style>
</head>
<body>
    <div class="loginuser">
        <div class="left">
        <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('assets/client/images/slide-3.jpg') }}"/>
        </div>

    </div>
</body>
</html>

