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
                            <a href="./index.html">Home</a>
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
                                <?php
                                    $message = Session::get('message_delete');
                                    if($message){
                                        echo '<span class="text-alert">'.$message.'</span>';
                                        Session::put('message_delete',null);
                                    }
                                ?>

                                <?php
                                    $subtotal = 0;
                                ?>
                                @foreach(Session::get('cart') as $key => $cart)
                                    <?php
                                        $cartPrice = $cart['product_qty'] * $cart['product_price'];
                                        $subtotal += $cartPrice;
                                    ?>
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ asset('/img/product/'.$cart['product_image']) }}" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $cart['product_name'] }}</h6>
                                                <h5>{{ number_format($cart['product_price']) }}đ</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input type="text" class="cart_quantity" min="1" name="cart_qty[{{ $cart['session_id'] }}]" value="{{ $cart['product_qty'] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{ number_format($cartPrice) }}đ</td>
                                        <td class="cart__close">
                                            <a href="/delete-product-cart/{{ $cart['session_id'] }}">
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
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>{{ number_format($subtotal) }}đ</span></li>
                            <li>Total <span>$ 169.50</span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
