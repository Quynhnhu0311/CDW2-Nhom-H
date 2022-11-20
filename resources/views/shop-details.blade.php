@extends('layout')
@section('content')

    @foreach($detail as $product_detail)
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="/">Home</a>
                            <a href="{{ url ('shop') }}">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-1.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-2.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-3.png">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset('./img/product/'.$product_detail->product_img) }}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset('./img/product/'.$product_detail->product_img) }}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset ('/product_detail->product_img') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <form>
                            @csrf
                            <div class="product__details__text">
                                <h4>{{ $product_detail->product_name}}</h4>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span> - 5 Reviews</span>
                                </div>
                                <h3>{{ number_format($product_detail->product_price) }} VND</h3>
                                <p>{{ $product_detail->product_description }}</p>
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                    </div>
                                    <input type="hidden" value="{{ $product_detail->product_id }}" class="cart_product_id_{{ $product_detail->product_id }}">
                                    <input type="hidden" value="{{ $product_detail->product_name }}" class="cart_product_name_{{ $product_detail->product_id }}">
                                    <input type="hidden" value="{{ $product_detail->product_price }}" class="cart_product_price_{{ $product_detail->product_id }}">
                                    <input type="hidden" value="{{ $product_detail->product_img }}" class="cart_product_image_{{ $product_detail->product_id }}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{ $product_detail->product_id }}">
                                    <button type="button" class="add-to-cart-btn primary-btn" data-id="{{ $product_detail->product_id }}" name="add-cart">add to cart</button>
                                </div>
                                <div class="product__details__btns__option">
                                    <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                </div>
                                <div class="product__details__last__option">
                                    <h5><span>Guaranteed Safe Checkout</span></h5>
                                    <img src="img/shop-details/details-payment.png" alt="">
                                    <ul>
                                        <li><span>Categories: </span>{{ $product_detail->type_name }} </li>
                                        <li><span>Manufactures: </span>{{ $product_detail->manu_name }} </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach($related_product as $related)
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('/img/product/'.$related->product_img) }}">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <form action="{{ url('favorite') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <input type="hidden" value="{{ $related->product_id }}" name="favorite_product_id">
                                    <?php  $id = Session::get('id'); ?>
                                        <input type="hidden" value="<?php echo $id ?>" name="favorite_user_id">
                                        <input name="submit-favorite" value="" type="submit">
                                </form>
                                <li><a href="#"><img src="{{ asset ('img/icon/compare.png') }}" alt=""> <span>Compare</span></a></li>
                                <li><a href="/shop-details/{{ $related->product_id }}"><img src="{{ asset ('img/icon/search.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $related->product_name }}</h6>
                            <input type="hidden" value="{{ $related->product_id }}" class="cart_product_id_{{ $related->product_id }}">
                            <input type="hidden" value="{{ $related->product_name }}" class="cart_product_name_{{ $related->product_id }}">
                            <input type="hidden" value="{{ $related->product_price }}" class="cart_product_price_{{ $related->product_id }}">
                            <input type="hidden" value="{{ $related->product_img }}" class="cart_product_image_{{ $related->product_id }}">
                            <input type="hidden" value="1" class="cart_product_qty_{{ $related->product_id }}">
                            <button type="button" class="add-to-cart-btn" data-id="{{ $related->product_id }}" name="add-cart">+ Add To Cart</button>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>{{ number_format($related->product_price) }} VND</h5>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
    <!-- Commtent Section Begin -->
    <section class="comment">
        <div class="container">
            <div class="title">
                <h2>Comment</h2>
            </div>
            <div class="show-comment">
                @foreach($comment_all as $comment_all)
                <div class="comment-item">
                    <div class="info-comment">
                        <div class="avatar">
                            <img src="{{ asset ('img/avatar.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <h2>{{ $comment_all->name }}</h2>
                            <div class="rating">
                                @for($i = 1; $i <= $comment_all->rating_value; $i++)
                                <i class="ratings fa fa-star-o"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="content-comment">
                        <p>{{ $comment_all->comment_content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="comment-items">
                <div class="comment-item">
                    <div class="info-comment">
                        <div class="avatar">
                            <img src="{{ asset ('img/avatar.jpg') }}" alt="">
                        </div>
                        <div class="name">
                            <?php
                            $name = Session::get('name');
                            ?>
                            <h2><?php echo $name ?></h2>
                        </div>
                    </div>
                    <div class="content-comment">
                        @foreach($detail as $product_detail)
                        <form action=""  enctype="multipart/form-data">
                        @endforeach
                            <?php
                            $id = Session::get('id');
                            ?>
                            <div class="rates">
                                <input type="radio" id="rating" class="rate" value="0" />
                                <input type="radio" checked id="star5"  class="rate" name="rating" value="5" />
                                <label for="star5"  class="" title="text">5 stars</label>
                                <input type="radio"  id="star4" class="rate" name="rating" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" class="rate" name="rating" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" class="rate" name="rating" value="2"  />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" class="rate" name="rating" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <input type="hidden" id="id_user_comment" name="id" value="<?php echo $id ?>">
                            @foreach($detail as $product_detail)
                            <input type="hidden" id="product_id" name="comment_product_id" value="{{$product_detail->product_id }}">
                            @endforeach
                            <textarea placeholder="" name="comment_content" id="comment_content" cols="100%" rows="5"></textarea>
                            <button type="button" name="submit-comment" id="btn-comment">Gửi Bình Luận</button>
                        </form>
                        <div id="test"></div>
                        <?php
                        $message_cmt = Session::get('message_cmt');
                        if($message_cmt){
                            echo '<span class="text-alert" style="color:red;">'.$message_cmt.'</span>';
                            Session::put('message_cmt',null);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    // function remove_background(product_id) {
    //     for(var count = 1; count <= 5; count++){
    //         $('#'+ product_id + '-' + count).css('color','#ccc');
    //     }
    // }
    // $(document).on('mouseenter', '.ratings', function(){
    //     var index = $(this).data("index");
    //     // var product_id = $(this).data('product_id');
    //     alert(index);
    // });
    </script>
    <!-- Comment Section End -->
@endsection
