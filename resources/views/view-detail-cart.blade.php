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
                            <a href="/shop">Shop</a>
                            <span>Detail Order</span>
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
                <div class="col-md-10">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Coupon Code</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php $subtotal = 0 ?>
                            @foreach($show_detail_order as $key => $show_detail_order)
                                <?php
                                    $total = $show_detail_order->product_price * $show_detail_order->product_qty;
                                    $subtotal += $total;
                                ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $show_detail_order->product_name }}
                                        </td>
                                        <td>
                                            {{ number_format($show_detail_order->product_price) }}đ
                                        </td>
                                        <td>
                                            {{ $show_detail_order->product_qty }}
                                        </td>
                                        <td>
                                        @if($show_detail_order->product_coupon != '')
                                            @if($coupon->coupon_condition == 1)
                                                <?php
                                                    $total_after_coupon = ($total*$coupon->coupon_number)/100;
                                                    $total_coupon = $total - $coupon->coupon_number;
                                                ?>
                                            @else
                                                <?php
                                                    $total_coupon = $total-$coupon->coupon_num;
                                                ?>
                                            @endif
                                            {{ number_format($total_coupon) }}đ
                                        @else
                                            Không có mã
                                        @endif
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                            <tr>
                                <td style="display: flex;">
                                    <p style="padding-right: 20px;font-size: 20px;font-weight: bold;">TOTAL : </p> {{ number_format($subtotal) }}đ
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
