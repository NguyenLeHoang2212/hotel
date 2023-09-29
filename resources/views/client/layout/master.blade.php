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
        .food,.drink{
            text-align: center;

        }
        .card-title{
            object-fit: cover;
            width: 100%;
            height: 50px;
        }
        .img{

            object-fit: cover;
            width: 100%;
            height: 250px;
        }
        .prices{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logofooter{
            width: 30px;
            height: 30px;
            object-fit: cover;
        }
        .discount_price{
            color: #c40025;
            padding: 20px;
            font-weight: 600  ;
            font-size: 20px;
              }
              .table{
                width: 80%;
                margin: 0 auto;
              }

              .shoping__cart__item{
                display: flex;
                align-items: center;
              }
              .shoping__cart__item img{
                object-fit: cover;
            width: 70px;
            height: 70px;
              }
              .table thead tr th{
                color: orange;
                font-size: 20px;
              }
              .shoping__cart__item h5{
                padding-left: 20px;
              }
              .table tbody tr td.shoping__cart__price{
                color: red;
                font-weight: 400;
                padding-top: 43px;
              }
              .table tbody tr td.shoping__cart__total{
                color: red;
                font-weight: 400;
                padding-top: 43px;
              }
              .table tbody tr td.shoping__cart__quantity{

                padding-top: 41px;
              }
              .table tbody tr td.shoping__cart__delete{

                padding-top: 42px;
              }
              .table tbody tr td.shoping__cart__quantity .pro-qty {
                text-align: center;
                display: flex
                }

                .qtybtn{
                    width: 30px;
                    text-align: center;
                    background: #6f6f6f;
                    cursor: pointer;
                }

                .table tbody tr td.shoping__cart__quantity .pro-qty  .qty{
                    width: 30px;
                    text-align: center;
                }
                .rowww{
                    width: 80%;
                    margin: 0 auto;
                    display: flex;
                    justify-content: space-between;
                }
                .cart__subtotal{
                    display: flex;
                    color: red;
                    font-size: 30px;
                            }
                .pay{
                    padding: 30px;
                    width: 100%;
                }
                .ajaxcart__subtotal{
                    padding: 40px;
                }
                #total-price-cart{
                    margin-left: 20px;
                    font-size: 30px;

                }



table {
    width: 100%;
    margin-bottom: 1em;
    border-collapse: collapse;
    border-spacing: 0
}

.table-wrap {
    max-width: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch
}



.item_product_main {
    position: relative;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
    margin-bottom: 20px
}

.item_product_main .product-thumbnail {
    position: relative
}

.item_product_main .product-thumbnail .image_thumb {
    overflow: hidden;
    width: 100%;
    display: flex;
    -o-justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -os-justify-content: center;
    -o-display: flex;
    -moz-display: flex;
    -webkit-display: flex;
    -os-display: flex;
    align-items: center;
    position: relative;
    height: auto !important;
    padding-bottom: 75%
}

.item_product_main .product-thumbnail .image_thumb img {
    width: auto !important;
    max-height: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    transition: .3s ease-in-out all;
    will-change: opacify
}

.item_product_main .product-thumbnail .image_thumb:hover img,.item_product_main .product-thumbnail .image_thumb:focus img {
    transform: scale(1.1)
}

.item_product_main .product-thumbnail .sale-label {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #ffffff;
    font-weight: 600;
    letter-spacing: -1px;
    padding: 5px 10px;
    z-index: 3
}

.item_product_main .product-thumbnail .sale-label span {
    position: relative;
    display: inline-block;
    background: #c40025;
    cursor: pointer;

    height: 35px;
    width: 35px;
    text-align: center;
    vertical-align: middle;
    line-height: 35px;
    font-size: 13px;
    border-radius: 4px
}

.item_product_main .product-thumbnail .sale-label span:before,.item_product_main .product-thumbnail .sale-label span:after {
    content: "";
    position: absolute;
    background: inherit;
    height: inherit;
    width: inherit;
    top: 0;
    left: 0;
    z-index: -1;
    transform: rotate(30deg);
    border-radius: 4px
}

.item_product_main .product-thumbnail .sale-label span:after {
    transform: rotate(60deg)
}

.item_product_main .product-thumbnail .group_action {
    margin: 0;
    position: absolute;
    right: 15px;
    top: 15px;
    width: 50px;
    z-index: 5
}

.item_product_main .product-thumbnail .btn-anima {
    width: 50px;
    height: 50px;
    text-align: center;
    display: inline-block;
    line-height: 50px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #cd9a2b;
    color: #fff;
    position: relative;
    margin-bottom: 10px
}

.item_product_main .product-thumbnail .btn-anima img {
    width: 24px;
    height: 24px;
    position: absolute;
    top: 14px;
    left: 13px
}

.item_product_main .product-thumbnail .btn-anima:hover {
    background: #c40025
}

.item_product_main .product-thumbnail .xem_nhanh {
    width: 50px;
    height: 50px;
    text-align: center;
    display: inline-block;
    line-height: 50px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #cd9a2b;
    color: #fff;
    position: relative;
    margin-bottom: 10px
}

.item_product_main .product-thumbnail .xem_nhanh img {
    width: 24px;
    height: 24px;
    position: absolute;
    top: 14px;
    left: 13px
}

.item_product_main .product-thumbnail .xem_nhanh:hover {
    background: #c40025
}

.item_product_main .product-thumbnail .btn-anima {
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0)
}

@media (min-width: 992px) {
    .item_product_main .product-thumbnail:hover .smart {
        visibility:hidden;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0)
    }
}

.item_product_main .product-thumbnail:hover .btn-anima {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1)
}

.item_product_main .product-info {
    padding: 1px 10px
}

.item_product_main .product-info .product-name {
    position: relative
}

.item_product_main .product-info .product-name a {
    font-size: 14px;
    font-weight: 600;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    white-space: unset;
    max-height: 20px;
    margin-bottom: 0px;
    margin-top: 10px;
    text-transform: uppercase
}

.item_product_main .product-info .price-box {
    position: relative;
    line-height: 1;
    margin-bottom: 10px
}

.item_product_main .product-info .price-box .price {
    color: #c40025;
    font-weight: 600;
    font-size: 18px
}

.item_product_main .product-info .price-box .compare-price {
    color: #98a4a9;
    text-decoration: line-through;
    font-weight: 300;
    margin: 0 0 0 10px;
    font-size: 14px
}

.alper-product-item {
    position: relative;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
    margin-bottom: 20px
}

.alper-product-item .item-product-img .image_thumb {
    overflow: hidden;
    width: 100%;
    display: flex;
    -o-justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -os-justify-content: center;
    -o-display: flex;
    -moz-display: flex;
    -webkit-display: flex;
    -os-display: flex;
    align-items: center;
    position: relative;
    height: auto !important;
    padding-bottom: 57%
}

.alper-product-item .item-product-img .image_thumb img {
    width: auto !important;
    max-height: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    transition: .3s ease-in-out all;
    will-change: opacify
}

.alper-product-item .item-product-img .image_thumb:after {
    content: "";
    position: absolute;
    left: 0;
    opacity: 1;
    position: absolute;
    right: 0;
    bottom: 0;
    background: rgba(255,255,255,0.5) none repeat scroll 0 0;
    height: 100%;
    transition: all 0.5s ease-in-out 0s;
    width: 0;
    z-index: 1
}

.alper-product-item .item-product-img .image_thumb:hover:after {
    opacity: 0;
    width: 100%
}

.alper-product-item .item-product-img .image_thumb:before {
    content: "";
    left: 0;
    opacity: 1;
    position: absolute;
    right: 0;
    top: 0;
    background: rgba(255,255,255,0.5) none repeat scroll 0 0;
    height: 0;
    transition: all 0.5s ease-in-out 0s;
    width: 100%;
    z-index: 1
}.item_product_main {
    position: relative;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
    margin-bottom: 20px
}

.item_product_main .product-thumbnail {
    position: relative
}

.item_product_main .product-thumbnail .image_thumb {
    overflow: hidden;
    width: 100%;
    display: flex;
    -o-justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -os-justify-content: center;
    -o-display: flex;
    -moz-display: flex;
    -webkit-display: flex;
    -os-display: flex;
    align-items: center;
    position: relative;
    height: auto !important;
    padding-bottom: 75%
}

.item_product_main .product-thumbnail .image_thumb img {
    width: auto !important;
    max-height: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    transition: .3s ease-in-out all;
    will-change: opacify
}

.item_product_main .product-thumbnail .image_thumb:hover img,.item_product_main .product-thumbnail .image_thumb:focus img {
    transform: scale(1.1)
}

.item_product_main .product-thumbnail .sale-label {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #ffffff;
    font-weight: 600;
    letter-spacing: -1px;
    padding: 5px 10px;
    z-index: 3
}

.item_product_main .product-thumbnail .sale-label span {
    position: relative;
    display: inline-block;
    background: #c40025;
    cursor: pointer;
    height: 35px;
    width: 35px;
    text-align: center;
    vertical-align: middle;
    line-height: 35px;
    font-size: 13px;
    border-radius: 4px
}

.item_product_main .product-thumbnail .sale-label span:before,.item_product_main .product-thumbnail .sale-label span:after {
    content: "";
    position: absolute;

    background: inherit;
    height: inherit;
    width: inherit;
    top: 0;
    left: 0;
    z-index: -1;
    transform: rotate(30deg);
    border-radius: 4px
}

.item_product_main .product-thumbnail .sale-label span:after {
    transform: rotate(60deg)
}

.item_product_main .product-thumbnail .group_action {
    margin: 0;
    position: absolute;
    right: 15px;
    top: 15px;
    width: 50px;
    z-index: 5
}

.item_product_main .product-thumbnail .btn-anima {
    width: 50px;
    height: 50px;
    text-align: center;
    display: inline-block;
    line-height: 50px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #cd9a2b;
    color: #fff;
    position: relative;
    margin-bottom: 10px
}

.item_product_main .product-thumbnail .btn-anima img {
    width: 24px;
    height: 24px;
    position: absolute;
    top: 14px;
    left: 13px
}

.item_product_main .product-thumbnail .btn-anima:hover {
    background: #c40025
}

.item_product_main .product-thumbnail .xem_nhanh {
    width: 50px;
    height: 50px;
    text-align: center;
    display: inline-block;
    line-height: 50px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #cd9a2b;
    color: #fff;
    position: relative;
    margin-bottom: 10px
}

.item_product_main .product-thumbnail .xem_nhanh img {
    width: 24px;
    height: 24px;
    position: absolute;
    top: 14px;
    left: 13px
}

.item_product_main .product-thumbnail .xem_nhanh:hover {
    background: #c40025
}

.item_product_main .product-thumbnail .btn-anima {
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0)
}
@media (min-width: 992px) {
    .item_product_main .product-thumbnail:hover .smart {
        visibility:hidden;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0)
    }
}

.item_product_main .product-thumbnail:hover .btn-anima {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1)
}

.item_product_main .product-info {
    padding: 1px 10px
}

.item_product_main .product-info .product-name {
    position: relative
}

.item_product_main .product-info .product-name a {
    font-size: 14px;
    font-weight: 600;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    white-space: unset;
    max-height: 20px;
    margin-bottom: 0px;
    margin-top: 10px;
    text-transform: uppercase
}

.item_product_main .product-info .price-box {
    position: relative;
    line-height: 1;
    margin-bottom: 10px
}

.item_product_main .product-info .price-box .price {
    color: #c40025;
    font-weight: 600;
    font-size: 18px
}

.item_product_main .product-info .price-box .compare-price {
    color: #98a4a9;
    text-decoration: line-through;
    font-weight: 300;
    margin: 0 0 0 10px;
    font-size: 14px
}
.icon_close{
    cursor: pointer;
    color: #98a4a9;
    font-weight: 500;
}

nav.navigation-top .box .icon {
    font-size: 99%;
    vertical-align: middle;
}
#total-items-cart{
    font-size: 11px;
    border-radius: 50%;
    font-weight: 300px;

    padding: 3px;
}
@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}

.card-registration .select-arrow {
top: 13px;
}

.bg-grey {
background-color: #eae8e8;
}

@media (min-width: 992px) {
.card-registration-2 .bg-grey {
border-top-right-radius: 16px;
border-bottom-right-radius: 16px;
}
}

@media (max-width: 991px) {
.card-registration-2 .bg-grey {
border-bottom-left-radius: 16px;
border-bottom-right-radius: 16px;
}
}
.delete-cart{
    font-size: 20px;
    color:green;
}
.continue{
bottom: 0;
}
.order{
    display: flex;
    justify-content: space-between;
}
.checkout__input input{
    padding: 15px;
    width: 100%;
}
.infor-order{
    width: 40%;
}
.cartshopping{
    width: 60%;
}
.cartshopping .total{
    width: 100%;
text-align: center;
}
.method{
    display: flex;
    align-items: center;
    justify-content: space-between;
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
