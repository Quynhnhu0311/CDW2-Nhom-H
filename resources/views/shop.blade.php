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
                            <input type="text" id="search-shop-input" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
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
                                                <!-- <li><a href="#">Men (20)</a></li>
                                                <li><a href="#">Bags (20)</a></li>
                                                <li><a href="#">Clothing (20)</a></li>
                                                <li><a href="#">Shoes (20)</a></li>
                                                <li><a href="#">Accessories (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li> -->

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
                                                <!-- <li><a href="#">Louis Vuitton</a></li>
                                                <li><a href="#">Chanel</a></li>
                                                <li><a href="#">Hermes</a></li>
                                                <li><a href="#">Gucci</a></li> -->

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
                                                <li><a href="#">$0.00 - $50.00</a></li>
                                                <li><a href="#">$50.00 - $100.00</a></li>
                                                <li><a href="#">$100.00 - $150.00</a></li>
                                                <li><a href="#">$150.00 - $200.00</a></li>
                                                <li><a href="#">$200.00 - $250.00</a></li>
                                                <li><a href="#">250.00+</a></li>
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
                                <p>Showing 1–12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">$0 - $55</option>
                                    <option value="">$55 - $100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shop-resutl">
                    @foreach($products as $row => $allProducts)
                    <div class="col-lg-4 col-md-6 col-sm-6 show-all-products">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('./img/product/'.$allProducts->product_img) }}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $allProducts->product_name }}</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>{{ number_format($allProducts->product_price) }}đ</h5>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    </div>
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
                    $('.show-all-products').hide();
                    $(".ajax-resutl").show();
                }
            })
        } else {
            // $(".ajax-resutl").hide();
        }
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