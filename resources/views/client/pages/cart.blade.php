@extends('client.layout.master')

@section('content')
<section class="page">
    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">cart</h2>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="shoping__product">Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp

            @foreach ($carts as $product => $item)
                <tr id="{{ $product }}">
                    <td class="shoping__cart__item">
                        <img src="{{ $item['image'] ?? '' }}" alt="">
                        <h5>{{ $item['name'] }}</h5>
                    </td>
                    <td class="shoping__cart__price">
                        ${{ number_format($item['discount_price'], 2) }}
                    </td>
                    <td class="shoping__cart__quantity">

                        <div  class="quantity">
                            <div data-price="{{ $item['discount_price'] }}" data-url="{{ route('product.update-item-in-cart',['product' => $product]) }}" data-id="{{ $product }}" class="pro-qty">
                             {{-- <span class="dec qtybtn">-</span> --}}
                             <input class="qty" type="text" value="{{ $item['qty'] }}">
                             {{-- <span class="inc qtybtn">+</span> --}}
                            </div>
                        </div>
                    </td>
                    <td class="shoping__cart__total">
                        ${{ number_format($item['qty'] * $item['discount_price'], 2) }}
                    </td>
                    <td >
                        <span data-id="{{ $product }}" data-url="{{ route('product.delete-item-in-cart',['product' => $product]) }}"  class="icon_close">X</span>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div class="rowww">
		<div class="back">
		<a class="btn-proceed-checkout btn-checkouts" title="menu" href="menu">CONTINUE SHOPPING</a>
	    </div>
			<div class="total">
				<div class="ajaxcart__subtotal">
					<div class="cart__subtotal">
						<div class="">Total:</div>
						<div class=""> $9999999</div>
	                </div>
	        </div>
				<div class="cart__btn-proceed-checkout-dt">
					<button onclick="location.href='/checkout'" type="button" class="pay btn btn-primary" id="btn-proceed-checkout" title="pay">PAY</button>
	            </div>
	    </div>
	</div>

</section>



    <!-- Shoping Cart Section End -->
@endsection
@section('js-custom')
    <script>
        $(document).ready(function() {
            $('.icon_close').on('click', function() {
                var url = $(this).data('url');
                var id = $(this).data('id');
                $.ajax({
                    method: 'get',
                    url: url,
                    success: function(response) {

                        $('tr#' + id).empty();
                    }
                });
            });

            $('.qtybtn').on('click', function() {
                event.preventDefault();


                var button = $(this);
                var id = button.parent().data('id');

                var qty = parseInt(button.siblings('.qty').val());
                var url = button.parent().data('url');




                if (button.hasClass('inc')) {
                    qty += 1;
                } else {
                    qty = (qty < 0) ? 0 : (qty -= 1);
                }

                var price = parseFloat(button.parent().data('price'));
                var totalPrice = price * qty;

                url += '/' + qty;

                $.ajax({
                    method: 'GET',
                    url: url,
                    success: function(response) {
                        // Swal.fire({
                        //     icon: 'success',
                        //     text: response.message,
                        // });
                        if (!qty) {
                            $('tr#' + id).empty();
                        }

                        $('tr#' + id + ' .shoping__cart__total').html("$" + totalPrice.toFixed(
                                2)
                            .replace(
                                /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                    }
                });
            });


        });
    </script>
@endsection
