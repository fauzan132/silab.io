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
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
				@csrf
					<span class="login100-form-title p-b-49">
						Daftar
					</span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Nama harus diisi">
						<span class="label-input100">Nama </span>
						<input class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Masukan nama" value="{{ old('name') }}" id="name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email pengguna harus diisi">
						<span class="label-input100">Email Pengguna</span>
						<input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Masukan nama pengguna" value="{{ old('email') }}">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="kata sandi harus diisi">
						<span class="label-input100">Kata Sandi</span>
						<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="password" name="password" placeholder="Masukan kata sandi">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate="Konfirmasi kata sandi harus diisi">
						<span class="label-input100">Konfirmasi Kata Sandi</span>
						<input class="input100" type="password" name="password_confirmation" id="password-confirm" placeholder="Masukan Konfirmasi kata sandi">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
                   <br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Daftar
							</button>
						</div>
					</div>
					<div class="flex-col-c p-t-30">
						<span class="txt1 p-b-17">
							Sudah Punya akun? 
							<a href="{{ url('/login') }}" class="txt2">
							Login
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