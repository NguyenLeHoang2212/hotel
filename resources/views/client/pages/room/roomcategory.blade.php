@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ========================  Page header ======================== -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Rooms & Suites</h2>
            <p>At home while on the road. </p>
        </div>
    </div>

    <!-- === rooms content === -->

    <div class="rooms rooms-category">
        <div class="container">

            <div class="row">


                @foreach ($rooms_luxury as $room_luxury)

                <div class="col-sm-6 col-md-6">
                    <div class="item">
                        <article>
                            <div class="image">
                                @php
                                $imagesLink = is_null($room_luxury->image) || !file_exists('images/' . $room_luxury->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $room_luxury->image);
                                @endphp
                                <img class="img" src="{{ $imagesLink }}" alt="{{ $room_luxury->name }}" width="150" height="150" />                    </div>
                            <div class="details">
                                <div class="text">
                                    <h3 class="title"><a href="room-overview">{{ $room_luxury->name }}</a></h3>
                                    <p>{{ $room_luxury->room_type }}</p>
                                </div>
                                <div class="book">
                                    <div>
                                        <a href="{{ route('reservation1',['id' => $room_luxury->id]) }}" class="btn btn-main">Book now</a>
                                    </div>
                                    <div>
                                        <span class="price h4"> {{ number_format($room_luxury->price)  }}VND</span>
                                        <span>per night</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                @endforeach


            @foreach ($rooms as $room)
            <div class="col-sm-6 col-md-6">

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
                                <span class="price h4"> {{ number_format($room->price)  }}VND</span>
                                <span>per night</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

            @endforeach



            </div>

        </div> <!--/container-->
    </div>
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

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-1.jpg') }});">
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
            <a href="facility">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-2.jpg') }});">
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
            <a href="facility">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-3.jpg') }});">
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
            <a href="facility">Anchor link</a>
        </li>

        <!-- === stretcher item === -->

        <li class="stretcher-item" style="background-image:url({{ asset('assets/client/images/services-4.jpg') }});">


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
            <a href="facility">Anchor link</a>
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
            <a href="facility">Anchor link</a>
        </li>

    </ul>
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
                    <a href="#" class="btn btn-clean" onclick="">Museums</a>
                </figure>
            </div>

            <!-- === item === -->

            <div class="col-xs-6 col-md-4">
                <figure>
                    <figcaption style="background-image:url({{ asset('assets/client/images/activity-2.jpg') }})">
                        <img src="{{ asset('assets/client/images/activity-2.jpg') }}" alt="" />
                    </figcaption>
                    <a href="#" class="btn btn-clean">Nightlife</a>
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
                    <a href="#" class="btn btn-clean">The City</a>
                </figure>
            </div>

        </div> <!--/row-->

    </div> <!--/container-->
</section>
@endsection
