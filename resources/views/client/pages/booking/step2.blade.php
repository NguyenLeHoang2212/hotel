@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Confirm your reservation</h2>
            <p>Guest information</p>
        </div>
    </div>

    <!-- ===  Step wrapper === -->

    <div class="step-wrapper">
        <div class="container">
            <div class="stepper">
                <ul class="row">
                    <li class="col-md-4 active">
                        <a href="reservation-1"><span data-text="Room & rates"></span></a>
                    </li>
                    <li class="col-md-4 active">
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

                <!-- ========================  Note block ======================== -->

                <div class="cart-wrapper">

                    <div class="note-block">

                        <div class="row">



                            <div class="col-md-12">

                                <div class="white-block">

                                    <div class="h4">Choose payment</div>

                                    <hr />

                                    <label class="containner">Cash On Delivery
                                        <input name="payment_method" required="required"  id="cod" value="cod" type="radio">
                                        <span class="cod"></span>
                                      </label>

                                      <label class="containner">VNPay
                                        <input name="payment_method" required="required"  type="radio" id="vnpay" value="vnpay" >
                                        <span class="vnpay"></span>
                                    </label>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========================  Cart wrapper ======================== -->

                <div class="cart-wrapper">


                    <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Room type</span>
                        </div>
                        <div class="text-right">
                            <span>Price</span>
                        </div>
                    </div>

                    <!--cart items-->
                    @foreach ($rooms as $room)

                    <div class="clearfix">

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="room-overview">   @php
                                    $imagesLink = is_null($room->image) || !file_exists('images/' . $room->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $room->image);
                                    @endphp
                                    <img  src="{{ $imagesLink }}"   />
                                </a>
                            </div>
                            <div class="title">
                                <div class="h2"><a href="room-overview" >{{ $room->name }}</a></div>


                                <p>
                                    {{-- <strong>Arrival date</strong> <br /> <a href="#">{{ $booking->arrival_date }}</a> --}}
                                </p>

                                <p>
                                    <strong>{{ $room->room_type }}</strong>
                                </p>
                            </div>
                            <div class="price">
                                <span class="final h3">{{ number_format($room->price) }} VND</span>

                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>

                    </div>
                                   <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount</strong>
                            </div>
                            <div>
                                <span>{{ number_format($room->price*(15/100)) }} VND</span>
                            </div>
                        </div>


                    </div>



                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <a href="/" class="btn btn-clean-dark">Change</a>
                            </div>
                            <div>
                                <a href="{{ route('reservation3',['id' => $room->id]) }}" class="btn btn-main">Reservation <span class="icon icon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div> <!--/container-->
    </div> <!--/checkout-->

</section>
@endsection
