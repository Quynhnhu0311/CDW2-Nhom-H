@extends('layout')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shop</h4>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form>
                            <input type="text" id="search-shop-input" onkeydown="return (event.keyCode!=13);" value="" placeholder="Search...">
                            <button type="submit" ><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                @foreach($protypes as $protype)
                                                <li class="ajax-protype" value="{{$protype->type_id}}"><a>{{$protype->type_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                @foreach($manufactures as $manufacture)
                                                <li class="ajax-manufacture" value="{{$manufacture->manu_id}}"><a>{{$manufacture->manu_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul>
                                                <form>
                                                    <div id="slider-range"></div>
                                                    <input type="text" id="amount" readonly>
                                                    <input type="hidden" name="start_price" id="start_price">
                                                    <input type="hidden" name="end_price" id="end_price">
                                                    <br>
                                                    <input type="submit" name="filter_price" value="Filter" class="btn btn-default">
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1???12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <form action="">
                                    @csrf
                                    <p>Sort by Price:</p>
                                    <select name="sort" id="sort">
                                        <option value="{{Request::url()}}?sort_by=none">---Select---</option>
                                        <option value="{{Request::url()}}?sort_by=tang_dan">Low To High</option>
                                        <option selected value="{{Request::url()}}?sort_by=giam_dan">High To Low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form>
                        @csrf
                        <div class="row shop-resutl">
                            @foreach($products as $row => $allProducts)
                            <div class="col-lg-4 col-md-6 col-sm-6 show-products">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('./img/product/'.$allProducts->product_img) }}">
                                        <ul class="product__hover">
                                            <form action="{{ url('favorite') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $allProducts->product_id }}" name="favorite_product_id">
                                                <?php $id = Session::get('id'); ?>
                                                <input type="hidden" value="<?php echo $id ?>" name="favorite_user_id">
                                                <input name="submit-favorite" value="" type="submit">
                                            </form>
                                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                            <li><a href="/shop-details/{{ $allProducts->product_id }}"><img src="img/icon/search.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{ $allProducts->product_name }}</h6>
                                        <div class="add-to-cart">
                                            <input type="hidden" value="{{ $allProducts->product_id }}" class="cart_product_id_{{ $allProducts->product_id }}">
                                            <input type="hidden" value="{{ $allProducts->product_name }}" class="cart_product_name_{{ $allProducts->product_id }}">
                                            <input type="hidden" value="{{ $allProducts->product_price }}" class="cart_product_price_{{ $allProducts->product_id }}">
                                            <input type="hidden" value="{{ $allProducts->product_img }}" class="cart_product_image_{{ $allProducts->product_id }}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{ $allProducts->product_id }}">
                                            <button type="button" class="add-to-cart-btn" data-id="{{ $allProducts->product_id }}" name="add-cart">+ Add To Cart</button>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5>{{ number_format($allProducts->product_price) }}??</h5>
                                        <div class="product__color__select">
                                            <label for="pc-4">
                                                <input type="radio" id="pc-4">
                                            </label>
                                            <label class="active black" for="pc-5">
                                                <input type="radio" id="pc-5">
                                            </label>
                                            <label class="grey" for="pc-6">
                                                <input type="radio" id="pc-6">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="store-filter clearfix">
                            <ul class="store-pagination">
                                {{ $products->links() }}
                            </ul>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const search = document.querySelector('#search-shop-input');
    let ajax_protype = document.querySelectorAll('.ajax-protype');
    let ajax_manufacture = document.querySelectorAll('.ajax-manufacture');
    let type, manu = 1;
    search.addEventListener('keyup', function() {
        let _text = $(this).val();
        if (_text != '') {
            $.ajax({
                url: "{{ url('./ajax-search-product-shop') }}/" + _text,
                type: 'GET',
                success: function(res) {
                    $(".shop-resutl").html(res);
                }
            })
        } else {}
    })
    ajax_protype.forEach((item) => {
        item.addEventListener('click', () => {
            let _value = type = item.value;
            let _search;
            if (search.value != '') {
                _search = search.value;
            } else {
                _search = " ";
            }
            $.ajax({
                url: "{{ url('./ajax-search-product-shop') }}/" + _search + "/" + _value + "/" + manu,
                type: 'GET',
                success: function(res) {
                    $(".shop-resutl").html(res);
                    $('.show-all-products').hide();
                    $(".ajax-resutl").show();
                }
            })
        })
    })
    ajax_manufacture.forEach((item) => {
        item.addEventListener('click', () => {
            let _value = manu = item.value;
            let _search;
            if (search.value != '') {
                _search = search.value;
            } else {
                _search = " ";
            }
            $.ajax({
                url: "{{ url('./ajax-search-product-shop') }}/" + _search + "/" + type + "/" + _value,
                type: 'GET',
                success: function(res) {
                    $(".shop-resutl").html(res);
                    $('.show-all-products').hide();
                    $(".ajax-resutl").show();
                }
            })
        })
    })
</script>
<!-- Shop Section End -->
@endsection