<!DOCTYPE html>
<html lang="en">
<head>
	<title>PT Surveyor Indonesia (PTSI)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{ asset('login_asset/images/logo.png') }}">
        
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login_asset/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login_asset/images/bg-01.jpg');">
			
			<div class="wrap-login100 p-l-55 p-r-55 p-t-20 p-b-54">
					<div class="col-sm-12 col-xs-12">
							<img class="logo" src="{{ asset('login_asset/images/logo.png') }}">
					</div>
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
				@csrf
					<span class="login100-form-title p-b-49">
						Masuk
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama pengguna harus diisi">
						<span class="label-input100">Nama Pengguna</span>
						<input class="input100" type="email" name="email" placeholder="Masukan nama pengguna">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="kata sandi harus diisi">
						<span class="label-input100">Kata Sandi</span>
						<input class="input100" type="password" name="password" placeholder="Masukan kata sandi">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="{{ route('password.request') }}">
							Lupa Kata Sandi ??
						</a>
					</div>					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Masuk
							</button>
						</div>
					</div>
					<div class="flex-col-c p-t-30">
						<span class="txt1 p-b-17">
							Belum Punya akun? 
							<a href="{{ url('/register') }}" class="txt2">
							Daftar
						</a>
						</span>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('login_asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('login_asset/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login_asset/js/main.js') }}"></script>

</body>
</html>