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

        }
        .left{
            width: 50%;
            margin-top: 100px;
            text-align: center;
        }
        .left .formlogin{
            width: 60%;
            margin: 70px auto;
            text-align: center;

        }
        .right{
            width: 50%;
        }
        .right img{
            height: 100vh;
            object-fit: cover;
            width: 100%;
        }
        .formlogin .first{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .formlogin  .last{
            display: flex;
            justify-content: space-around;
            align-items: center;

        }
        .formlogin .first input{
            width: 60%;
            margin-right: 50px;
            padding: 20px;

        }
        .formlogin .first label{
            width: 20%
        }
        .formlogin .last label{
            width: 20%
        }
        .formlogin .last input{
            width: 60%;
            margin-right: 50px;
            padding: 20px;
        }
        .controlform{
            display: flex;
            justify-content: space-around;
        }
        .buttonlogin{
            display: flex;
            justify-content: space-around;
            margin: 50px auto;

        }
        .contaainer {
  display: block;
  position: relative;
  cursor: pointer;
  font-size: 15px;
  margin-left: 123px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.contaainer input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: white;
  border: 2px solid gray;
}

/* On mouse-over, add a grey background color */
.contaainer:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.contaainer input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.contaainer input:checked ~ .checkmark:after {
  display: block;
}
.contaainer h5{
    margin-right: 158px;
}
/* Style the checkmark/indicator */
.contaainer .checkmark:after {
  left: 7px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
    </style>
</head>
<body>
    <div class="loginuser">
        <div class="left">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h1>LOGIN TO HELIOS</h1>

        <form class="formlogin" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group first" >
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group last mb-3">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>



                {{-- <label for="remember_me" class="inline-flex items-center">
                    <input >
                    <span class="ml-2 text-sm text-gray-600"></span>
                </label> --}}
                <label for="remember_me" class="contaainer">
                    <input id="remember_me" type="checkbox"  name="remember">
                    <span class="checkmark"></span>
                    <h5>{{ __('Remember me') }}</h5>
                  </label>




            <div class="buttonlogin">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button  class="ml-3 btn btn-primary">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
        </div>
        <div class="right">
            <img  src="{{ asset('assets/client/images/slide-3.jpg') }}"/>
        </div>

    </div>
</body>
</html>

