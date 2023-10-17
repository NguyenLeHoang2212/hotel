@extends('client.layout.master')
@section('content')
<!-- ========================  Header content ======================== -->

<section class="frontpage-slider">
    <div class="owl-slider owl-slider-header owl-slider-fullscreen">

        <!-- === slide item === -->

        <div class="item" style="background-image:url({{ asset('assets/client/images/slide-3.jpg') }})">
            <div class="box text-center">
                <div class="container">
                    <div class="rating animated" data-animation="fadeInDown">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2 class="title animated h1" data-animation="fadeInDown">
                        A moment of <br /> <span>pure prestige</span>
                    </h2>
                    <div class="desc animated" data-animation="fadeInUp">
                        Lavish social and business events
                    </div>
                    <div class="desc animated" data-animation="fadeInUp">
                        and unforgettable weddings.
                    </div>

                </div>
            </div>
        </div>

        <!-- === slide item === -->

        <div class="item" style="background-image:url({{ asset('assets/client/images/slide-1.jpg') }})">
            <div class="box text-center">
                <div class="container">
                    <h2 class="title animated h1" data-animation="fadeInDown">
                        The privacy and <br />
                        individuality of a custom
                    </h2>
                    <div class="desc animated" data-animation="fadeInUp">
                        The Residences have their own dedicated private entrance as well <br />
                        as an anonymous "celebrity" entrance, for ultimate privacy.
                    </div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="#" class="btn btn-clean">Virtual tour</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- === slide item === -->

        <div class="item" style="background-image:url({{ asset('assets/client/images/slide-2.jpg') }})">
            <div class="box text-center">
                <div class="container">
                    <div class="rating animated" data-animation="fadeInDown">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2 class="title animated h1" data-animation="fadeInDown">Fairmont managed!</h2>
                    <div class="desc animated" data-animation="fadeInUp">The elegant Champagne Bar, the stylish Colina Club.</div>
                    <div class="desc animated" data-animation="fadeInUp">Guestrooms and luxurious suites</div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="#" class="btn btn-clean">Get insipred</a>
                    </div>
                </div>
            </div>
        </div>

    </div> <!--/owl-slider-->
</section>

<!-- ======================== Booking ======================== -->

<section class="booking booking-inner">

    <div class="section-header hidden">
        <div class="container">
            <h2 class="title">Booking & reservations</h2>
        </div>
    </div>


</section>

<!-- ========================  Rooms ======================== -->

<section class="rooms rooms-widget">

    <!-- === rooms header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Rooms accommodation <a href="rooms-category" class="btn btn-sm btn-clean-dark">View all</a></h2>
            <p>Designed as a privileged almost private place where you'll feel right at home</p>
        </div>
    </div>

    <!-- === rooms content === -->

    <div class="container">

        <div class="owl-rooms owl-theme">

            @foreach ($rooms as $room)

            <div class="item">
                <article>
                    <div class="image">
                        @php
                        $imagesLink = is_null($room->image) || !file_exists('images/' . $room->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $room->image);
                        @endphp
                        <img class="img" src="{{ $imagesLink }}" alt="{{ $room->name }}" width="150" height="150" />                    </div>
                    <div class="details">
                        <div class="text">
                            <h3 class="title"><a href="room-overview">{{ $room->name }}</a></h3>
                            <p>{{ $room->room_type }}</p>
                        </div>
                        <div class="book">
                            <div>
                                <a href="{{ route('reservation1',['id' => $room->id]) }}" class="btn btn-main">Book now</a>
                            </div>
                            <div>
                                <span class="price h6"> {{ number_format($room->price)  }}VND</span>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            @endforeach






        </div><!--/owl-rooms-->

    </div> <!--/container-->

</section>

<!-- ========================  Stretcher widget ======================== -->

<section class="stretcher-wrapper">

    <!-- === stretcher header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Resort facilities <a href="facility" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
            <p>
                With the best luxury spa, salon and fitness experiences
            </p>
        </div>
    </div>

    <!-- === stretcher === -->

    <ul class="stretcher">

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-1.jpg') }})">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Spa center</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Spa center</h4>
                <figcaption>Unparalleled devotion to luxury</figcaption>
            </figure>
            <!--anchor-->
            <a href="https://www.booking.com/hotel/co/spa-la-colina.vi.html">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-2.jpg') }})">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Gym</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Gym</h4>
                <figcaption>Care about results</figcaption>
            </figure>
            <!--anchor-->
            <a href="https://www.tripadvisor.com.vn/Attraction_Review-g662606-d25348173-Reviews-Colina_Gym-Costa_Adeje_Adeje_Tenerife_Canary_Islands.html">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-3.jpg') }})">
            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Fitness</span>
                </div>
            </div>
            <figure>
                <h4>Fitness</h4>
                <figcaption>Your daily activities</figcaption>
            </figure>
            <!--anchor-->
            <a href="https://www.invitedclubs.com/clubs/las-colinas-country-club/amenities/fitness">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-4.jpg') }})">


            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Beauty salon</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Beauty salon</h4>
                <figcaption>Hair salons and spas</figcaption>
            </figure>
            <!--anchor-->
            <a href="https://www.yelp.com/biz/colina-salon-rancho-cucamonga-2">Anchor link</a>
        </li>

        <!-- === stretcher item more === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-5.jpg') }})">


            <!--logo-item-->
            <div class="stretcher-logo">
                <div class="text">
                    <span class="text-intro h4">Swimming</span>
                </div>
            </div>
            <!--main text-->
            <figure>
                <h4>Swimming</h4>
                <figcaption>Underwater Activities</figcaption>
            </figure>
            <!--anchor-->
            <a href="https://www.booking.com/hotel/es/colina.vi.html?aid=356980&label=gog235jc-1DCAsoRkIGY29saW5hSDNYA2j0AYgBAZgBKrgBF8gBDNgBA-gBAYgCAagCA7gCsPL-qAbAAgHSAiQ4MmZhMzY4ZC1jZWQ0LTQ0NzctYmQ1ZC01ZjJiMzc4MDMyNGPYAgTgAgE&sid=873381e3e9df4a0c9f63304859f4c763&dist=0&keep_landing=1&sb_price_type=total&type=total&">Anchor link</a>
        </li>

    </ul>
</section>

<!-- ========================  Blog ======================== -->

<section class="blog blog-widget">

    <!-- === stretcher header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Latest news <a href="blog-category" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
            <p>
                Events, place to go, tour info & more
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- === article item === -->

            <div class="col-sm-4">
                <a href="blog-item">
                    <article>
                        <div class="image">
                            <img src="{{ asset('assets/client/images/activity-3.jpg') }}"  alt="" />
                        </div>
                        <div class="text">
                            <div class="time">
                                <span>22</span>
                                <span>05</span>
                                <span>2014</span>
                            </div>
                            <h2 class="h4 title">
                                What to do when holidays go wrong
                            </h2>
                        </div>
                    </article>
                </a>
            </div>

            <!-- === article item === -->

            <div class="col-sm-4">
                <a href="blog-item">
                    <article>
                        <div class="image">
                            <img src="{{ asset('assets/client/images/activity-4.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <div class="time">
                                <span>22</span>
                                <span>05</span>
                                <span>2014</span>
                            </div>
                            <h2 class="h4 title">
                                Everything you need to know about vaccinations
                            </h2>
                        </div>
                    </article>
                </a>
            </div>

            <!-- === article item === -->

            <div class="col-sm-4">
                <a href="blog-item">
                    <article>
                        <div class="image">
                            <img src="{{ asset('assets/client/images/activity-5.jpg') }}" alt="" />
                        </div>
                        <div class="text">
                            <div class="time">
                                <span>22</span>
                                <span>05</span>
                                <span>2014</span>
                            </div>
                            <h2 class="h4 title">
                                Six simple ways to save money on airport car parking
                            </h2>
                        </div>
                    </article>
                </a>
            </div>

        </div> <!--/row-->
    </div> <!--/container-->
</section>

<!-- ========================  Cards ======================== -->

<section class="cards">

    <!-- === cards header === -->

    <div class="section-header">
        <div class="container">
            <h2 class="title">Near by <a href="#" class="btn btn-sm btn-clean-dark">View all</a></h2>
            <p>Here's a selection of ionic sites related to art, fashion and design.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- === item === -->

            <div class="col-xs-12 col-md-8">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-1.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-1.jpg') }}" alt="" />
                    </figcaption>
                    <a href="https://www.tripadvisor.com.vn/Tourism-g2613500-Colina_State_of_Sao_Paulo-Vacations.html" class="btn btn-clean" onclick="">Museums</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-2.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-2.jpg') }}" alt="" />
                    </figcaption>
                    <a href="https://www.yelp.com/search?find_desc=Nightlife&find_loc=Coquimbo+44%2C+RM+9340000+Colina%2C+Chile" class="btn btn-clean">Nightlife</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-3.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-3.jpg') }}" alt="" />
                    </figcaption>
                    <a href="menu" class="btn btn-clean">Food & drink</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-4.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-4.jpg') }}" alt="" />
                    </figcaption>
                    <a href="https://www.vntrip.vn/cam-nang/cac-trung-tam-thuong-mai-sai-gon-49988" class="btn btn-clean">Shopping</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-5.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-5.jpg') }}" alt="" />
                    </figcaption>
                    <a href="https://www.archdaily.com/city/colina" class="btn btn-clean">The City</a>
                </figure>
            </div>

        </div> <!--/row-->

    </div> <!--/container-->
</section>


<!-- ======================== Image blocks ======================== -->

<section class="image-blocks image-blocks-header">

    <div class="section-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Apartment residences <a href="rooms-category" class="btn btn-sm btn-clean">View all</a></h2>
            <p>At home while on the road. </p>
        </div>
    </div>

    <div class="container">
        <div class="blocks blocks-left">
            <div class="item">
                <div class="text">

                    <!-- === room info === -->

                    <h2 class="title">{{ $rooms_luxury[0]->name }}</h2>
                    <p>
                        {{ $rooms_luxury[0]->room_type }}
                    </p>

                    <!-- === room facilities === -->

                    <div class="room-facilities">

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-guest"></i> 4 Persons</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-roomservice"></i> Room service</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-king-bed"></i> Kingsize bed</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-kitchen"></i> All inclusive</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-compas"></i> 460 sqft room</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-tv"></i> TV</figcaption>
                        </figure>

                    </div>

                    <!-- === booking === -->

                    <div class="book">
                        <div>
                            <a href="{{ route('reservation1',['id' => 5]) }}" class="btn btn-danger btn-lg">Book</a>
                        </div>
                        <div>
                            <span class="price h2">{{ number_format( $rooms_luxury[0]->price ) }} VND</span>
                            <span>per night</span>
                        </div>
                    </div> <!--/booking-->

                </div><!--/text-->
            </div> <!--/item-->

            <div class="image" style="background-image:url({{ asset('assets/client/images/apartment-1.jpg') }})">
                <img src="{{ asset('assets/client/images/apartment-1.jpg') }}" alt="" />
            </div>
        </div>

        <div class="blocks blocks-right">
            <div class="item">
                <div class="text">

                    <!-- === room info === -->

                    <h2 class="title">{{ $rooms_luxury[1]->name }}</h2>
                    <p>
                        {{ $rooms_luxury[1]->room_type }}
                    </p>

                    <!-- === room facilities === -->

                    <div class="room-facilities">

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-guest"></i> 4 Persons</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-king-bed"></i> Kingsize bed</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-roomservice"></i> Room service</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-kitchen"></i> All inclusive</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-compas"></i> 460 sqft room</figcaption>
                        </figure>

                        <!--=== icon ===-->

                        <figure>
                            <figcaption><i class="hotelicon hotelicon-tv"></i> TV</figcaption>
                        </figure>

                    </div>

                    <!-- === booking === -->

                    <div class="book">
                        <div>
                            <a href="{{ route('reservation1',['id' => 6]) }}" class="btn btn-danger btn-lg">Book</a>
                        </div>
                        <div>
                            <span class="price h2">{{ number_format($rooms_luxury[1]->price) }} VND</span>
                            <span>per night</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="image" style="background-image:url({{ asset('assets/client/images/apartment-2.jpg') }})">
                <img src="{{ asset('assets/client/images/apartment-2.jpg') }}" alt="" />
            </div>
        </div>


    </div> <!--/container-->
</section>

<!-- ======================== Quotes ======================== -->

<section class="quotes quotes-slider" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
    <div class="container">

        <!-- === Quotes header === -->

        <div class="section-header">
            <h2 class="title">Testimonials</h2>
            <p>What other think about us</p>
        </div>

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="quote-carousel">

                    <!-- === quoute item === -->

                    <div class="quote">

                        <div class="text">
                            <h4>Jenna Hale</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Glen Jordan</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Lea Nils</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Nora Star</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>

                    <!-- === quoute item === -->

                    <div class="quote">
                        <div class="text">
                            <h4>Glen Jordan</h4>
                            <p>Ipsum dolore eros dolore <br />dolor dolores sit iriure</p>
                        </div>
                        <div class="more">
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div> <!--/quote-carousel-->
            </div>
        </div> <!--/row-->
    </div> <!--/container-->
</section>

<!-- ========================  Subscribe ======================== -->


@endsection
