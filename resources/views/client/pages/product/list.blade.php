@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/foods.jpg') }})">
        <div class="container">


        </div>
    </div>

    <!-- ===  Blog === -->

    <div class="foods mt-4" >
        <div class="container">
            <div class="row">
                @foreach ($products as $products)
                <div class="col-md-2">

                    <div class="card" style="width: 18rem;">
                        <img src="{{ $products->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $products->name }}</h5>
                       <h6>{{ $products->price }}</h6>
                       <h6>{{ $products->discount_price }}</h6>

                          <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                      </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endsection


