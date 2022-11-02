<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url ('css/select.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/magnific-popup.css') }}" type="text/css">
    <!-- <link rel="stylesheet" href="{{ url ('css/nice-select.css') }}" type="text/css"> -->
    <link rel="stylesheet" href="{{ url ('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/sweetalert.css') }}" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <?php
                    $name = Session::get('name');
                    if($name){
                        echo $name;
                        echo '<li><a href="/logout-user">Log out</a></li>';
                    }
                    else{
                        echo '<a href="#">Sign in</a>';
                    }
                ?>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php
                                    $name = Session::get('name');
                                    if($name){
                                        echo '<div class="header__top__hover">
                                                <span>'.$name.'<i class="arrow_carrot-down"></i></span>
                                                <ul>
                                                    <a href="/logout-user"><li>LOG OUT</li></a>
                                                </ul>
                                            </div>';
                                    }
                                    else{
                                        echo '<a href="/login">Sign in</a>';
                                    }
                                ?>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset ('/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/tat-ca-san-pham">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url ('about')}}">About Us</a></li>
                                    <li><a href="{{ url ('shop-details')}}">Shop Details</a></li>
                                    <li><a href="{{ url ('shopping-cart')}}">Shopping Cart</a></li>
                                    <li><a href="{{ url ('checkout')}}">Check Out</a></li>
                                    <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="{{ url ('contact') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php
                        $subqty = 0;
                    ?>
                    @if(Session::has('cart') != null)
                    @foreach(Session::get('cart') as $key => $cart)
                    <?php
                            $subqty += $cart['product_qty']++;
                        ?>
                    @endforeach
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{ asset ('img/icon/search.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/icon/heart.png') }}" alt=""></a>
                        <a href="/gio-hang"><img src="{{ asset ('img/icon/cart.png') }}" alt="">
                            <span>{{$subqty}}</span></a>
                    </div>
                    @else
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{ asset ('img/icon/search.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/icon/heart.png') }}" alt=""></a>
                        <a href="/gio-hang"><img src="{{ asset ('img/icon/cart.png') }}" alt=""> <span>0</span></a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                            document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ url ('js/data.json') }}"></script>
    <script src="{{ url ('js/jquery.min.js') }}"></script>
    <script src="{{ url ('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url ('js/bootstrap.min.js') }}"></script>
    <script src="{{ url ('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url ('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url ('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url ('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ url ('js/jquery.slicknav.js') }}"></script>
    <!-- <script src="{{ url ('js/mixitup.min.js') }}"></script> -->
    <script src="{{ url ('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url ('js/main.js') }}"></script>
    <script src="{{ url ('js/sweetalert.js') }}"></script>

    <!-- Chức năng thêm sản phẩm vào giỏ hàng -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart-btn').click(function() {
                var id = $(this).data('id');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{url('/add-cart-ajax')}}",
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_price: cart_product_price,
                        cart_product_image: cart_product_image,
                        cart_product_qty: cart_product_qty,
                        _token: _token
                    },
                    success: function(data) {
                        swal({
                                title: "Add Cart Successfully!",
                                text: "Please go to cart to review your shopping cart",
                                showCancelButton: true,
                                cancelButtonText: "See More",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Go To Cart",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{ url('/gio-hang') }}";
                            });
                    }
                });
            });
        });
    </script>

    <!-- API lấy ra địa chỉ -->
    <script>
        $(function() {
            apiProvince = (prodvince) => {
                let district;

                prodvince.forEach(element => {
                    $('#province').append(`<option value="${element.code}">${element.name}</option>`)
                });
                $('#province').change(function() {
                    $('#district').html('<option value="-1">Select District</option>')
                    $('#town').html('<option value = "-1"> Select Town </option>')
                    let value = $(this).val();
                    $.each(prodvince, function(index, element) {
                        if (element.code == value) {
                            district = element.districts;
                            $.each(element.districts, function(index, element1) {
                                $('#district').append(
                                    `<option value="${element1.code}">${element1.name}</option>`
                                    )
                            })

                        }
                    })
                });
                $('#district').change(function() {
                    $('#town').html('<option value = "-1"> Select Town </option>')
                    let value = $(this).val();
                    $.each(district, function(index, element) {
                        if (element.code == value) {
                            element.wards.forEach(element1 => {
                                $('#town').append(
                                    `<option value="${element1.code}">${element1.name}</option>`
                                    )
                            });
                        }
                    })
                });
            }
            prodvince = JSON.parse(data);
            apiProvince(prodvince);
        });
    </script>
</body>

</html>
