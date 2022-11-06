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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url ('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url ('css/style.css') }}" type="text/css">
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
                if ($name) {
                    echo $name;
                    echo '<li><a href="/logout-user">Log out</a></li>';
                } else {
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
                                if ($name) {
                                    echo '<div class="header__top__hover">
                                                <span>' . $name . '<i class="arrow_carrot-down"></i></span>
                                                <ul>
                                                    <a href="/logout-user"><li>LOG OUT</li></a>
                                                </ul>
                                            </div>';
                                } else {
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
                        <a href="{{ url ('/') }}"><img src="{{ asset ('/img/logo.png') }}" alt=""></a>
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
                            <li><a href="{{url ('blog') }}">Blog</a></li>
                            <li><a href="{{ url ('contact') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{ asset ('img/icon/search.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('img/icon/heart.png') }}" alt=""></a>
                        <a href="{{url ('shopping-cart') }}"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
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
                            All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
        <div class="h-100 d-flex justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
                <div class="input-result">

                </div>
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script>
        document.querySelector('#search-input').addEventListener('keyup', function() {
            let _text = $(this).val();
            if (_text != '') {
                $.ajax({
                    url: "http://127.0.0.1:8000/ajax-search-product/" + _text,
                    type: 'GET',
                    success: function(res) {
                        // let _html = "";
                        // for (let pro of res) {
                        //     _html += '<div class="search-result">';
                        //     _html += '<div><a href=""><img src="{{ asset ("' + /img/logo.png + '") }}" alt="" style="width: 50px;height:50px"></a></div>';
                        //     _html += ' <div style="margin-left: 20px;">';
                        //     _html += ' <a href="#">' + pro.product_name + 'A</a>';
                        //     _html += '<h6>thong tin mo ta</h6>';
                        //     _html += ' </div>';
                        //     _html += ' </div>';
                        // }
                        document.querySelector('.input-result').style.display = "block";
                        document.querySelector('.input-result').innerHTML = res;
                    }
                })
            } else {
                document.querySelector('.input-result').style.display = "none";
                document.querySelector('.input-result').innerHTML = ' ';
            }
        })
    </script>
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
</body>

</html>