@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Make a reservation</h2>
            <p>Proceed to booking step 2</p>
        </div>
    </div>

    <!-- ===  Checkout steps === -->

    <div class="step-wrapper">
        <div class="container">
            <div class="stepper">
                <ul class="row">
                    <li class="col-md-4 active">
                        <a href="reservation-1"><span data-text="Room & rates"></span></a>
                    </li>
                    <li class="col-md-4">
                        <a href="reservation-2"><span data-text="Reservation"></span></a>
                    </li>
                    <li class="col-md-4">
                        <a href="reservation-3"><span data-text="Checkout"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ===  Checkout === -->

    <div class="checkout">

        <div class="container">

            <div class="clearfix">

                <!-- ========================  Cart wrapper ======================== -->

                <div class="cart-wrapper">

                    <!--cart header -->

                    <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Room type</span>
                        </div>
                        <div class="text-right">
                            <span>Price</span>
                        </div>
                    </div>

                    <!--cart items-->

                    <div class="clearfix">

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="room-overview"><img src="{{ asset('assets/client/images/room-4.jpg') }}" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h2"><a href="room-overview">Luxury appartment</a></div>
                                <p>
                                    <strong>Arrival date</strong> <br /> <a href="#">(September 22, 2017)</a>
                                </p>
                                <p>
                                    <strong>Guests</strong> <br />  2 Adults, 1 Child
                                </p>
                                <p>
                                    <strong>Nights</strong> <br /> 7
                                </p>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 1.998</span>
                                <span class="discount">$ 2.666</span>
                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>

                    </div>

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 159,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>TAX</strong>
                            </div>
                            <div>
                                <span>$ 59,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <span class="checkbox">
                                    <input type="checkbox" id="couponCodeID">
                                    <label for="couponCodeID">Promo code</label>
                                    <input type="text" class="form-control form-coupon" value="" placeholder="Enter your coupon code" />
                                </span>
                            </div>
                            <div>
                                <div class="h2 title">$ 1259,00</div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <a href="#" class="btn btn-clean-dark">Change</a>
                            </div>
                            <div>
                                <a href="reservation-2" class="btn btn-main">Reservation <span class="icon icon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!--/container-->
    </div> <!--/checkout-->

</section>
@endsection
