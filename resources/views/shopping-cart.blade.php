@extends('layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <form action="{{ url('/update-cart') }}" method="post">
                    @csrf
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session()->has('message_delete'))
                                    <div class="alert text-alert">
                                        {{ session()->get('message_delete') }}
                                    </div>
                                    <?php session()->forget(['message_delete']); ?>
                                @elseif(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                    <?php session()->forget(['error']); ?>
                                @endif
                                <?php
                                    $subtotal = 0;
                                ?>
                                    @foreach($cart as $key => $cart)
                                        <?php
                                            $cartPrice = $cart->product_qty * $cart->product_price;
                                            $subtotal += $cartPrice;
                                        ?>
                                        <tr>
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img src="{{ asset('/img/product/'.$cart->product_image) }}" alt="">
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6>{{ $cart->product_name }}</h6>
                                                    <h5>{{ number_format($cart->product_price) }}đ</h5>
                                                    <input type="hidden"  name="product_id" value="{{ $cart->product_id }}">
                                                    <input type="hidden"  name="session_id" value="{{ $cart->session_id }}">
                                                </div>
                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input type="text" class="cart_quantity" min="1" name="cart_qty[{{ $cart->session_id }}]" value="{{ $cart->product_qty }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__price">{{ number_format($cartPrice) }}đ</td>
                                            <td class="cart__close">
                                                <a href="/delete-product-cart/{{ $cart->session_id }}">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="/">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <input class="submit" type="submit" value="&#xf110; Update Cart" name="update_qty">
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="/check-coupon" method="post">
                            @csrf
                            <input type="text" placeholder="Coupon code" name="coupon_name">
                            <button type="submit" class="check_coupon" name="check_coupon">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                            <ul>
                                <li>Subtotal <span>{{ number_format($subtotal) }}đ</span></li>
                                @if(Session::get('coupon'))
                                    @foreach(Session::get('coupon') as $row => $coupon)
                                        @if($coupon['coupon_condition'] == 1)
                                            <li>Discount <span>{{ number_format($coupon['coupon_number']) }}đ</span></li>
                                            <?php
                                                $total_coupon =  $subtotal - $coupon['coupon_number'];
                                            ?>
                                            <li>Total <span>{{ number_format($total_coupon) }}đ</span></li>
                                        @elseif($coupon['coupon_condition'] == 2)
                                            <li>Discount <span>{{ $coupon['coupon_number'] }}%</span></li>
                                            <?php
                                                $total_coupon = $subtotal - ($subtotal * $coupon['coupon_number']) / 100;
                                            ?>
                                            <li>Total <span>{{ number_format($total_coupon) }}đ</span></li>
                                        @endif
                                    @endforeach
                                @else
                                    <li>Total <span>{{ number_format($subtotal) }}đ</span></li>
                                @endif
                            </ul>
                        <div class="delete-coupons">
                            @if(Session::get('coupon'))
                                <a href="/delete-coupon" class="delete_discount primary-btn">Delete Discount</a>
                            @endif
                        </div>
                        <a href="/checkoutPage" class="checkout_cart primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
