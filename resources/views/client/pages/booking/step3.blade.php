@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->
    {{-- <form method="post" action="{{ route('checkout-room') }}" enctype="multipart/form-data"> --}}
        @csrf
    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">

        <div class="container">
            <h2 class="title">Reservation completed</h2>
            <p>Thank you!</p>
        </div>

    </div>

    <!-- ===  Step wrapper === -->

    <div class="step-wrapper">
        <div class="container">

            <div class="stepper">
                <ul class="row">
                    <li class="col-md-4 active">
                        <a href=""><span data-text="Room & rates"></span></a>
                    </li>
                    <li class="col-md-4 active">
                        <a href=""><span data-text="Reservation"></span></a>
                    </li>
                    <li class="col-md-4 active">
                        <a href=""><span data-text="Checkout"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ===  Checkout === -->

    <div class="checkout">

        <div class="container">
            <form  method="post" action="{{ route('checkout-booking') }}" enctype="multipart/form-data">

                <div class="clearfix">

                    <!-- ========================  Note block ======================== -->

                    <div class="cart-wrapper">

                        <div class="note-block">

                            <div class="row">
                                <!-- === left content === -->

                                <div class="col-md-6">

                                    <div class="white-block">

                                        <div class="h4">Guest information</div>

                                        <hr />

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Name<span>*</span></p>
                                                    <input name="name_user" style="border: none" name="name" disabled value="{{ Auth::user()->name }}" type="text" required="required">
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Phone<span>*</span></p>
                                                    <input  style="border: none" name="phone" value="{{ Auth::user()->phone }}" pattern="[0-9]{10}"  type="text" required="required">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>Email<span>*</span></p>
                                                    <input style="border: none" name="email" disabled value="{{ Auth::user()->email }}" type="text" required="required">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p>City<span>*</span></p>
                                                    <input style="border: none" value="Ho Chi Minh">
                                                </div>
                                            </div>


                                        </div>

                                    </div> <!--/col-md-6-->

                                </div>

                                <!-- === right content === -->
                            @foreach ($bookings as $booking)
                            <div class="col-md-6">
                                <div class="white-block">

                                    <div class="h4">Reservation details</div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Booking no.</strong> <br />
                                               <input style="border: none" name="booking_id" value="{{ $booking->id }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Time Check In</strong> <br />
                                                <span>12h</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Arrival Date</strong> <br />
                                                <span></span>
                                                <input style="border: none" name="arrival_date" value="{{ $booking->arrival_date }}" />

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Depature Date</strong> <br />
                                                <input style="border: none" name="depature_date" value="{{ $booking->depature_date }}" />

                                            </div>
                                        </div>

                                    </div>

                                    <div class="h4">Payment details</div>

                                    <hr />

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Transaction time</strong><br />
                                                <span>{{ $booking->created_at }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Name Room</strong><br />
                                                <input style="border: none" name="name" value="{{ $booking->name }}" />

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Amount</strong><br />
                                                <input style="border: none" name="name" value="{{ number_format($booking->total) }}" />

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Reservation type</strong><br />
                                                <input style="border: none" name="room_type" value="{{ $booking->room_type }}" />

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            @endforeach

                            </div>
                        </div>
                    </div>


                    <!-- ========================  Cart wrapper ======================== -->


                </div>
                <div class="clearfix">
                    <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                        <div>
                            <a href="/" class="btn btn-clean-dark">Change</a>
                        </div>
                        {{-- <div>
                            <a href="{{ route('reservation3',['id' => $room->id]) }}" class="btn btn-main">Reservation <span class="icon icon-chevron-right"></span></a>
                        </div> --}}
                        <div>
                            <button name="checkout_booking" class="btn btn-primary" type="submit">CheckOut</button>

                        </div>
                    </div>
                </div>
            @csrf
            </form>
        </div> <!--/container-->
    </div> <!--/checkout-->
    {{-- <button  type="submit" class="btn btn-primary">Check Out</button>
    </form> --}}
</section>
@endsection
