@extends('layout')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Favorite Product</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="{{ url ('shop')}}">Shop</a>
                            <span>Favorite Product</span>
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
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id_user = Session::get('id'); ?>
                                @if($id_user)
                                @foreach($favorite as $favorite_id)
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ asset('/img/product/'.$favorite_id->product_img) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $favorite_id->product_name }}</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{ number_format($favorite_id->product_price) }}VND</td>
                                        <td>
                                            <div class="add-to-cart">
                                                <input type="hidden" value="{{ $favorite_id->product_id }}" class="cart_product_id_{{ $favorite_id->product_id }}">
                                                <input type="hidden" value="{{ $favorite_id->product_name }}" class="cart_product_name_{{ $favorite_id->product_id }}">
                                                <input type="hidden" value="{{ $favorite_id->product_price }}" class="cart_product_price_{{ $favorite_id->product_id }}">
                                                <input type="hidden" value="{{ $favorite_id->product_img }}" class="cart_product_image_{{ $favorite_id->product_id }}">
                                                <input type="hidden" value="1" class="cart_product_qty_{{ $favorite_id->product_id }}">
                                                <button type="button" class="add-to-cart-btn" data-id="{{ $favorite_id->product_id }}" name="add-cart">+ Add To Cart</button>
                                            </div>
                                        </td>
                                        <td>
                                            <form class="btn btn-danger btn-sm" method="POST" action="{{ $favorite_id->favorite_id }}" onsubmit="return confirm('Bạn Có Muốn Xóa Không?')">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"><i class="fa fa-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="/">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
