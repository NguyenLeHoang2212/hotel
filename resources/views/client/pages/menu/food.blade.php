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
                            @php
                            $imagesLink = is_null($product->image) || !file_exists('images/' . $product->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $product->image);
                        @endphp
                        <img src="{{ $imagesLink }}" alt="{{ $product->name }}" width="150"
                            height="150" />
                          <h3 class="card-title">{{ $product->name }}</h3>
                          <div class="prices">
                            <p class="discount_price" >${{ $product->discount_price }}</p>

                            <p class="price">${{ $product->price }}</p>
                          </div>

                          <a data-url="{{ route('product.add-to-cart',['product' => $product]) }}" class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('js-custom')
<script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function(event) {
            event.preventDefault();
            var url = $(this).data('url');
            $.ajax({
                method: 'get', //method form
                url: url, //action form
                success: function(response) {
                    console.log(response);
                    Swal.fire({
                        icon: 'success',
                        // title: 'Notification',
                        text: response.message,
                    });
                }
            });
        });
    });
</script>
@endsection

