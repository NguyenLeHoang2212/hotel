@extends('client.layout.master')

@section('content')

<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Blog</h2>
            <p>Events & culture</p>
        </div>
    </div>

    <!-- ===  Blog === -->

    <div class="blog blog-category">

        <div class="container">

            <div class="row">

                <!-- === blog-content === -->

                <div class="col-sm-8 col-md-9">

                    <div class="row">

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-6">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/activity-1.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            The only guide to travel insurance you'll ever need
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-6">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/activity-2.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            10 simple ways to survive the airport experience
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/activity-3.jpg') }}" alt="" />
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

                        <div class="col-sm-6 col-md-4">
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

                        <div class="col-sm-6 col-md-4">
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

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/event-1.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            10 tips for avoiding holiday villa fraud
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/event-2.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            How to claim compensation for lost, delayed or damaged luggage
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/services-1.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            The best boutique hotels in Europe's coolest city
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/services-2.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            How to have the perfect holiday in our hotel
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/services-3.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            The five best destinations for a family holiday in October
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                        <!-- === article item === -->

                        <div class="col-sm-6 col-md-4">
                            <a href="blog-item">
                                <article>
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/services-4.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <div class="time">
                                            <span>22</span>
                                            <span>05</span>
                                            <span>2014</span>
                                        </div>
                                        <h2 class="h4 title">
                                            What is a babymoon – and should I have one?
                                        </h2>
                                    </div>
                                </article>
                            </a>
                        </div>

                    </div>

                    <!-- === pagination === -->

                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div> <!--/pagination-->

                </div>

                <!-- === blog-menu === -->

                <div class="col-sm-4 col-md-3">
                    <aside>
                        <div class="box box-search">
                            <input type="text" value="" class="form-control" placeholder="Search the blog" />
                            <button class="btn btn-main btn-sm">Go!</button>
                        </div>

                        <div class="booking booking-default-theme">

                            <div class="booking-wrapper">

                                <h5>Check availability</h5>

                                <div class="row">

                                    <!--=== date arrival ===-->

                                    <div class="col-xs-6 col-sm-6">
                                        <div class="date" id="dateArrival" data-text="Arrival">
                                            <input class="datepicker" readonly="readonly" />
                                            <div class="date-value"></div>
                                        </div>
                                    </div>

                                    <!--=== date departure ===-->

                                    <div class="col-xs-6 col-sm-6">
                                        <div class="date" id="dateDeparture" data-text="Departure">
                                            <input class="datepicker" readonly="readonly" />
                                            <div class="date-value"></div>
                                        </div>
                                    </div>

                                    <!--=== button ===-->

                                    <div class="col-xs-12 col-sm-12">
                                        <a href="reservation-1" class="btn btn-clean">
                                            Book now
                                            <small>Best Prices Guaranteed</small>
                                        </a>
                                    </div>

                                </div> <!--/row-->
                            </div><!--/booking-wrapper-->

                        </div>

                        <div class="box box-categories">
                            <h4 class="title">Blog categories</h4>
                            <ul>
                                <li><a href="#">City guide</a></li>
                                <li class="active"><a href="#">Shopping</a></li>
                                <li><a href="#">Adventures</a></li>
                                <li><a href="#">Ultimate Itineraries</a></li>
                                <li><a href="#">Last minute deals</a></li>
                            </ul>
                        </div>

                        <div class="box box-posts">
                            <h4 class="title">Popular posts</h4>
                            <ul>
                                <li>
                                    <a href="blog-item">
                                        <span class="date">
                                            <span>Jun</span>
                                            <span>22</span>
                                        </span>
                                        <span class="text">What to do when holidays go wrong</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-item">
                                        <span class="date">
                                            <span>Jun</span>
                                            <span>19</span>
                                        </span>
                                        <span class="text">How to claim compensation for lost or damaged luggage</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-item">
                                        <span class="date">
                                            <span>Jun</span>
                                            <span>18</span>
                                        </span>
                                        <span class="text">The best boutique hotels in Europe's coolest city</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-item">
                                        <span class="date">
                                            <span>Jun</span>
                                            <span>10</span>
                                        </span>
                                        <span class="text">The five best destinations for a family holiday in October</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-item">
                                        <span class="date">
                                            <span>Jun</span>
                                            <span>31</span>
                                        </span>
                                        <span class="text">Everything you need to know about vaccinations</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="box box-tags">
                            <h4 class="title">Popular tags</h4>
                            <ul class="clearfix">
                                <li><a href="#">accommodation</a></li>
                                <li><a href="#">rooms</a></li>
                                <li><a href="#">suits</a></li>
                                <li><a href="#">hotel</a></li>
                                <li><a href="#">airport</a></li>
                                <li><a href="#">places</a></li>
                                <li><a href="#">resturants</a></li>
                                <li><a href="#">booking</a></li>
                                <li><a href="#">payment</a></li>
                                <li><a href="#">reservation</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>


            </div> <!--/row-->


        </div><!--/container-->
    </div> <!--/blog-category-->
</section>





@endsection

