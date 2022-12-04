@extends('layout')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <a href="/tat-ca-san-pham">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="/confirm-order" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" class="input" name="shipping_fistname" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" class="input" name="shipping_lastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="checkout__input select">
                                <p>Address<span>*</span></p>
                                <select name="shipping_province" id="province" required>
                                    <option value="">Select Province</option>
                                </select>
                                <select name="shipping_district" id="district" required>
                                    <option value="">Select District</option>
                                </select>
                                <select name="shipping_town" id="town" required>
                                    <option value="">Select Town</option>
                                </select>
                            </div>
                        </div>
                        <select class="checkout__input"  name="shipping_address" id="cars">
                            @foreach($customer as $row)
                                @foreach($row->addresscustomers as $address)
                                <option value="{{ $address->address }}">{{ $address->address }}</option>
                                @endforeach
                            @endforeach
                        </select>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    @foreach($customer as $row)
                                    @foreach($row->infocustomers as $info)
                                    <input type="text" value="{{ $info->phone }}" name="shipping_phone" disabled>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    @foreach($customer as $row)
                                    <input type="text" value="{{ $row->email }}" name="shipping_email"  disabled>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes<span>*</span></p>
                            <input type="text" name="shipping_note" placeholder="Notes about your order, e.g. special notes for delivery.">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4">
                        <div class="checkout__order">
                            <?php
                                $total = 0;
                                $subTotal = 0;
                            ?>
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product
                                    <span>Total</span>
                                </div>
                                <ul class="checkout__total__products">
                                @foreach($cart as $key => $cart)
                                    <?php
                                        $total = $cart->product_price * $cart->product_qty;
                                        $subTotal += $total;
                                    ?>
                                    <li>{{ $cart->product_name }} | x{{ $cart->product_qty }}
                                        <span>{{ number_format($total) }}đ</span>
                                    </li>
                                @endforeach
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>{{ number_format($subTotal) }}đ</span></li>
                                    @if(Session::get('coupon'))
                                        @foreach(Session::get('coupon') as $key => $coupon_cart)
                                            @if($coupon_cart['coupon_condition'] == 1)
                                                <input class="input" type="hidden" name="order_coupon" value="{{ $coupon_cart['coupon_code'] }}">
                                                <li>Discount <span>{{ number_format($coupon_cart['coupon_number']) }}đ</span></li>
                                                <?php
                                                    $total_coupon =  $subTotal - $coupon_cart['coupon_number'];
                                                ?>
                                                <li>Total <span>{{ number_format($total_coupon) }}đ</span></li>
                                            @elseif($coupon_cart['coupon_condition'] == 2)
                                                <input class="input" type="hidden" name="order_coupon" value="{{ $coupon_cart['coupon_code'] }}">
                                                <li>Discount <span>{{ number_format($coupon_cart['coupon_number']) }}%</span></li>
                                                <?php
                                                    $total_coupon = $subTotal - ($subTotal * $coupon_cart['coupon_number']) / 100;
                                                ?>
                                                <li>Total <span>{{ number_format($total_coupon) }}đ</span></li>
                                            @endif
                                        @endforeach
                                    @else
                                        <li>Discount <span>0</span></li>
                                        <li>Total <span>{{ number_format($subTotal) }}đ</span></li>
                                    @endif
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
