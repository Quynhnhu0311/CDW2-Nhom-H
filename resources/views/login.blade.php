<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
<<<<<<< HEAD
<!--===============================================================================================-->	
=======
<!--===============================================================================================-->
>>>>>>> function_login_and_logout
=======
<!--===============================================================================================-->
>>>>>>> layout_login_and_register
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css') }}">
<<<<<<< HEAD
<<<<<<< HEAD
<!--===============================================================================================-->	
=======
<!--===============================================================================================-->
>>>>>>> function_login_and_logout
=======
<!--===============================================================================================-->
>>>>>>> layout_login_and_register
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('vendor/select2/select2.min.css') }}">
<<<<<<< HEAD
<<<<<<< HEAD
<!--===============================================================================================-->	
=======
<!--===============================================================================================-->
>>>>>>> function_login_and_logout
=======
<!--===============================================================================================-->
>>>>>>> layout_login_and_register
	<link rel="stylesheet" type="text/css" href="{{ url ('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
<<<<<<< HEAD
<<<<<<< HEAD
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
=======
=======
>>>>>>> layout_login_and_register

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="/login-user" method="POST">
                @csrf
<<<<<<< HEAD
>>>>>>> function_login_and_logout
=======
>>>>>>> layout_login_and_register
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
                        <img src="img/logo.png" alt="">
					</span>
<<<<<<< HEAD
<<<<<<< HEAD

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
=======
=======
>>>>>>> layout_login_and_register
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert" style="color:red;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email">
<<<<<<< HEAD
>>>>>>> function_login_and_logout
=======
>>>>>>> layout_login_and_register
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
<<<<<<< HEAD
<<<<<<< HEAD
							<button class="login100-form-btn">
=======
							<button class="login100-form-btn" name="login">
>>>>>>> function_login_and_logout
=======
							<button class="login100-form-btn" name="login">
>>>>>>> layout_login_and_register
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="{{url ('/register')}}">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<<<<<<< HEAD
<<<<<<< HEAD
	

	<div id="dropDownSelect1"></div>
	
=======
=======
>>>>>>> layout_login_and_register


	<div id="dropDownSelect1"></div>

<<<<<<< HEAD
>>>>>>> function_login_and_logout
=======
>>>>>>> layout_login_and_register
<!--===============================================================================================-->
	<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ url('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/js-login/main.js') }}"></script>

</body>
<<<<<<< HEAD
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> function_login_and_logout
=======
</html>
>>>>>>> layout_login_and_register
