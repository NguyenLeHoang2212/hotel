@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/foods.jpg') }})">

    </div>

    <!-- ===  Blog === -->

    <div class="foods mt-2" >
        <div class="container">
            <div class="row">

                @foreach ($products as $product)
                <div class="product col-md-4">

                    <div  class="food">

                        <div class="card-body">
                            <img src="{{ $product->image }}" class="card-img-top"  alt="">

                          <h3 class="card-title">{{ $product->name }}</h3>
                          <div class="prices">
                            <p class="discount_price" >${{ $product->discount_price }}</p>

                            <p class="price">${{ $product->price }}</p>
                          </div>

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


