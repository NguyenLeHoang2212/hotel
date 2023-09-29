@extends('client.layout.master')
@section('content')
<section class="page">
    <div class="page-header" style="background-image:url({{ asset('assets/client/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Your Order</h2>
        </div>
    </div>
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form method="post" action="{{ route('place-order') }}">
                    <div class="order">
                        <div class="infor-order">
                            <h3>Billing Details</h3>

                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input disabled value="{{ Auth::user()->name }}" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input name="address" type="text" placeholder="Street Address"
                                    class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input name="phone" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input disabled value="{{ Auth::user()->email }}" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input name="note" type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                            <div class="paymentmethod">
                                <p>Payment Methods</p>
                                <div class="method">
                                    <div class="checkout__input__checkbox">
                                        Cash On Delivery
                                        <input name="payment_method" type="checkbox" id="cod" value="cod">
                                        <span class="cod"></span>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        VNPay
                                        <input name="payment_method" type="checkbox" id="vnpay" value="vnpay">
                                        <span class="vnpay"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="cartshopping">

                            <table class="table">

                                <tbody id="table-cart">

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
                                            <td class="shoping__cart__delete" >
                                                <span data-id="{{ $product }}" data-url="{{ route('product.delete-item-in-cart',['product' => $product]) }}"  class="icon_close">X</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="total">
                                <div class="ajaxcart__subtotal">
                                    <div class="cart__subtotal">
                                        @php
                                        $carts = session()->get('carts', []);
                                        $total = 0;
                                        foreach ($carts as $item) {
                                            $total += $item['discount_price'] * $item['qty'];
                                        }
                                        @endphp

                                        <div style="color: green;font-size:20px">SubTotal :</div>
                                        <div style="color: green;font-size:20px"  id="total-price-cart"> ${{ number_format($total, 2) }}</div>

                                    </div>

                                    <button style="padding: 30px;margin-top:20px;" type="submit" class="btn btn-primary">PLACE ORDER</button>
                            </div>
                    </div>


                    @csrf
                </form>
            </div>
        </div>
    </section>
</section>
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


                        $('#total-items-cart').html(response.total_items);

                        $('#total-price-cart').html('$' + response.total_price.toFixed(2)
                            .replace(
                                /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
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
                                $('#total-items-cart').html(response.total_items);

                        $('#total-price-cart').html('$' + response.total_price.toFixed(2)
                            .replace(
                                /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                    }
                });
            });
            $('.delete-cart').on('click', function(event) {
                event.preventDefault();
                $.ajax({
                    method: 'get',
                    url: '{{ route('product.deleteall-item-in-cart') }}',
                    success: function(response) {




                        $('#total-items-cart').html(response.total_items);
                $('#total-price-cart').html('$' + response.total_price.toFixed(2)
                    .replace(
                        /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));



                    $('#table-cart').empty();

                    }
                });
            });

        });
    </script>
@endsection


