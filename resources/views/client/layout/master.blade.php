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


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .product{
            padding-top: 50px;
        }
        .food{
            text-align: center;

        }
        img{

            object-fit: cover;
            width: 100%;
            height: 250px;
        }
        .prices{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .price{
            color: #98a4a9;
           text-decoration: line-through;
        }
        .discount_price{
            color: #c40025;
            padding: 20px;
            font-weight: 600  ;
            font-size: 20px;
              }
    </style>
</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

      @include('client.pages.header')

        @yield('content')

        <!-- ================== Footer  ================== -->

        @include('client.pages.footer')

    </div> <!--/wrapper-->

    <!--JS files-->
    <script src="{{ asset('assets/client/js/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/client/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/client/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('js-custom')
</body>

</html>
