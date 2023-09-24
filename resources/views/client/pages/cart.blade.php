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

            @foreach ($carts as $item)
                <tr>
                    <td class="shoping__cart__item">
                        <img src="{{ $item['image'] ?? '' }}" alt="">
                        <h5>{{ $item['name'] }}</h5>
                    </td>
                    <td class="shoping__cart__price">
                        ${{ number_format($item['discount_price'], 2) }}
                    </td>
                    <td class="shoping__cart__quantity">

                        <div class="quantity">
                            <div class="pro-qty">
                             <span class="decqtybtn">-</span>
                             <input class="qty" type="text" value="{{ $item['qty'] }}">
                             <span class="incqtybtn">+</span>
                            </div>
                        </div>
                    </td>
                    <td class="shoping__cart__total">
                        ${{ number_format($item['qty'] * $item['discount_price'], 2) }}
                    </td>
                    <td class="shoping__cart__item__close">
                        <span class="icon_close"></span>
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

