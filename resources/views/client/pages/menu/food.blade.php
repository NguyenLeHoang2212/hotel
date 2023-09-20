@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/foods.jpg') }})">
        <div class="container">


        </div>
    </div>

    <!-- ===  Blog === -->

    <div class="foods mt-5" >
        <div class="container">
            <div class="row">
                @for ($i=1;$i<=3;$i++)
                <div class="col-md-4">

                    <div class="card" style="width: 18rem;">
                        <img src="https://media.cooky.vn/images/blog-2016/top-10-mon-an-ngon-noi-tieng-chau-au%203.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Food</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                      </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</section>
@endsection


