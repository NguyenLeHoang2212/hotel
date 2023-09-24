@extends('client.layout.master')
@section('content')
<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Food and drink</h2>
        </div>
    </div>

    <!-- ===  Blog === -->

    <div class="foods mt-2" >
        <div class="container">
            @foreach ($products as $product)

<div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">

    <div class="item_product_main">








<div class="product-thumbnail">


    @php
    $imagesLink = is_null($product->image) || !file_exists('images/' . $product->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $product->image);
@endphp
<img class="img" src="{{ $imagesLink }}" alt="{{ $product->name }}" width="150"
    height="150" />



<div class="group_action">



    <a data-url="{{ route('product.add-to-cart',['product' => $product]) }}"  href="#"  class="btn-anima hidden-xs xem_nhanh btn-circle btn-views btn_view btn right-to quick-view add-to-cart">
        <img width="24" height="24" src="http://bizweb.dktcdn.net/100/472/947/themes/888072/assets/cart-add.svg?1693302863640" >
    </a>

    <a   class="btn-anima hidden-xs xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
        <img width="24" height="24" src="http://bizweb.dktcdn.net/100/472/947/themes/888072/assets/view.svg?1693302863640" >
    </a>

</div>
</div>

<div class="product-info">

<h3 class="product-name"><a >{{ $product->name }}</a></h3>
<div class="price-box">

    <span class="price">${{ $product->discount_price }}</span>
    <span class="compare-price">${{ $product->price }}</span>

</div>
</div>
    </div>
</div>
@endforeach


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
