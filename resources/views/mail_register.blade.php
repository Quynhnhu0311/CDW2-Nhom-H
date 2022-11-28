<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$name = '';
$pass = '';
if ($request->name == '') {
    $name = 'user' . rand(1, 1000);
} else {
    $name = $request->name;
}
if ($request->pass == '') {
    $pass = $name;
} else {
    $pass = $request->pass;
}

?>

<div style="text-align: center;">
    <h2>Bạn đã đăng ký thành công</h2>
    <p>vui lòng nhấn vào nút phía dưới để xác nhận đăng ký</p>
    <p style="color: red;">Lưu ý: mật khẩu đăng nhập của bạn là: <span style="color:blue">{{$pass}}</span></p>
    <form action="{{url('email-register-user')}}" method="GET" style="position: absolute;left: 45%;transform: translateY(30px);">
        @csrf
        <input class="input100" type="hidden" name="name" value="{{$name}}">
        <input class="input100" type="hidden" name="email" value="{{$request->email}}">
        <input class="input100" type="hidden" name="pass" value="{{$pass}}">
        <button style="color: #fff; background-color: #00bc8c; border-color: #00bc8c; box-shadow: none; border-radius: 10px;width: 125px; height: 50px;">Xác Nhận</button>
    </form>
</div>

</html>