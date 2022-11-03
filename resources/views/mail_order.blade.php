<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận Đơn Hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url ('css/style.css') }}" type="text/css">
</head>
<style>
    .header-mail {
    text-align: center;
    color: #fff;
    font-weight: bold;
    }
    .mail {
        background: #222;
        border-radius: 12px;
        padding:15px;
    }
    .body-mail {
        background: cadetblue;
        padding: 15px;
    }
    .title-mail {
        text-align:center;
        color:#fff;
        font-weight:bold;
        font-size:30px;
    }
    .title-mail h4 {
        margin:0;
    }
    .cart-information h4 {
        color:#000;
        text-transform:uppercase;
    }
    .welcome {
        color:#fff;
    }
    .welcome strong{
        color:#000;
        text-decoration:underline;
    }
    .cart-information strong{
        color:#fff;
        text-transform:uppercase;
    }
    .receiver-information h4{
        color:#000;
        text-transform:uppercase;
    }
    .receiver-information span {
        color:#fff;
    }
    .notification {
        color:#fff;
    }
    .product-information h4{
        color:#000;
        text-transform:uppercase;
    }
    .product-information table{
        border:1px;
    }
    .total {
        text-align: right;
    }
    .history p{
        color:#fff;
        text-align:center;
        font-size:15px;
    }

</style>
<body>
    <div class="mail">
        <div class="col-md-12">
            <p class="header-mail">Đây là email tự động. Quý khách vui lòng không trả lời email này!</p>
            <div class="row body-mail">
                <div class="col-md-6 title-mail">
                    <img src="{{ asset ('/img/logo.png') }}" alt="">
                    <h4>Unisex Fashion</h4>
                </div>

                <div class="col-md-6 welcome">
                    <p>Chào bạn: <strong> {{$shipping_array['customer_name']}} </strong></p>
                </div>
                <div class="col-md-12">
                    <div class="cart-information">
                        <h4>Thông tin đơn hàng</h4>
                        <p>Mã đơn hàng : <strong>{{ $code['order_code'] }}</strong></p>
                        @if($coupon_array['coupon_code'] == '')
                            <p>Mã khuyến mãi áp dụng : <strong> Không có </strong></p>
                        @else
                            <p>Mã khuyến mãi áp dụng : <strong>{{ $coupon_array['coupon_code'] }}</strong></p>
                        @endif
                        <p>Dịch vụ : <strong>Đặt hàng online</strong></p>
                    </div>
                    <div class="receiver-information">
                        <h4>Thông tin người nhận</h4>
                        <p>Email :
                            <span>{{ $shipping_array['shipping_email'] }}</span>
                        </p>
                        <p>Họ và tên người gửi :
                            <span>{{ $shipping_array['shipping_fistname'] }} {{ $shipping_array['shipping_lastname'] }}</span>
                        </p>
                        <p>Địa chỉ nhận hàng :
                            <span>{{ $shipping_array['shipping_province'] }} , {{ $shipping_array['shipping_district'] }} , {{ $shipping_array['shipping_town'] }} , {{ $shipping_array['shipping_address'] }}</span>
                        </p>
                        <p>Số điện thoại :
                            <span>{{ $shipping_array['shipping_phone'] }}</span>
                        </p>
                        <p>Ghi chú đơn hàng :
                            @if($shipping_array['shipping_note'] == '')
                                <span>Không có</span>
                            @else
                                <span>{{ $shipping_array['shipping_note'] }}</span>
                            @endif
                        </p>
                    </div>
                    <p class="notification">Nếu thông tin không đúng người nhận hàng không có chúng tôi sẽ liên hệ với người đặt hàng để trao đổi về thông tin đơn hàng đã đặt.</p>
                    <div class="product-information">
                        <h4>Sản phẩm đã đặt</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th>Số lượng đặt</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sub_total = 0;
                                    $total = 0;
                                ?>
                                @foreach($cart_array as $cart)
                                    <?php
                                        $sub_total = $cart['product_qty']*$cart['product_price'];
                                        $total += $sub_total;
                                    ?>
                                    <tr>
                                        <td>{{ $cart['product_name'] }}</td>
                                        <td>{{number_format($cart['product_price'])}} VND</td>
                                        <td>{{ $cart['product_qty'] }}</td>
                                        <td>{{number_format($sub_total)}} VND</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4" class="total">Tổng tiền thanh toán : {{number_format($total)}} VND</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="history">
                    <p>Xem lại lịch sử đơn hàng đã đặt tại :
                        <a target="_blank" href="">Lịch sử đơn hàng của bạn!</a>
                    </p>
                    <p>Xin cảm ơn quý khách đã đặt hàng!</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>