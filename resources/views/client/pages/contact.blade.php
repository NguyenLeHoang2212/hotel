@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Contact</h2>
            <p>The place, our services & our team</p>
        </div>
    </div>

    <!-- ===  Contact === -->

    <div class="contact">

        <div class="container">

            <!-- === Google map === -->

            <div class="map" id="map"></div>

            <div class="row">

                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                    <!-- === Contact block === -->

                    <div class="contact-block">

                        <!-- === Contact banner === -->

                        <div class="banner">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10 text-center">
                                    <h2 class="title">Send an email</h2>
                                    <p>
                                        Please use this form if you have any questions about our products <br /> and we'll get back with you very soon.
                                    </p>

                                    <div class="contact-form-wrapper">

                                        <a class="btn btn-clean open-form" data-text-open="Contact us via form" data-text-close="Close form">Contact us via form</a>

                                        <div class="contact-form clearfix">
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" value="" class="form-control" placeholder="Your name" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" value="" class="form-control" placeholder="Your email" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <input type="text" value="" class="form-control" placeholder="Subject" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Your message" rows="10"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 text-center">
                                                        <input type="submit" class="btn btn-clean" value="Send message" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- === Contact info === -->

                        <div class="contact-info">
                            <div class="row">
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-map-marker"></span>
                                        <figcaption>
                                            <strong>Where are we?</strong>
                                            <span>200 12th Ave, New York, <br />NY 10001, USA</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-phone"></span>
                                        <figcaption>
                                            <strong>Call us</strong>
                                            <span>
                                                <strong>T</strong> +1 222 333 4444 <br />
                                                <strong>F</strong> +1 222 333 5555
                                            </span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-4">
                                    <figure class="text-center">
                                        <span class="icon icon-clock"></span>
                                        <figcaption>
                                            <strong>Working hours</strong>
                                            <span>
                                                <strong>Mon</strong> - Sat: 10 am - 6 pm <br />
                                                <strong>Sun</strong> 12pm - 2 pm
                                            </span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div> <!--/contact-block-->
                </div><!--col-sm-8-->
            </div> <!--/row-->
        </div> <!--/container-->
    </div> <!--/contact-->
</section>

@endsection
