<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse-rtl/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 07:55:00 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('login_asset/images/fav.png') }}">
<title>Silab - PT Surveyor Indonesia</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('login_asset/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('login_asset/css/animate.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('login_asset/css/style.css') }}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('login_asset/css/colors/blue.css') }}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
		
	  <form class="form-horizontal form-material" id="loginform" method="POST"  action="{{ route('register') }}">
		@csrf
		<a href="javascript:void(0)" class="text-center db"><img style="width:130px;" src="{{ asset('login_asset/images/logo.png') }}" alt="Home" /></a>  
		<center><h3>Daftar</h3></center>
        <div class="form-group m-t-40">
          <div class="col-xs-12">
			<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" required="" name="name" placeholder="Nama Pengguna" value="{{ old('name') }}">
			@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="form-group m-t-40">
          <div class="col-xs-12">
			<input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" required="" name="email" placeholder="Email Pengguna" value="{{ old('email') }}">
			@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
			<input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required="" name="password" placeholder="Kata Sandi">
			@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
          </div>
		</div>
		<div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" name="password_confirmation" id="password-confirm" placeholder="Masukan Konfirmasi kata sandi">
          </div>
        </div>
       
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Masuk</button>
          </div>
        </div>
       
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Sudah punya akun? <a href="{{ url('/login') }}" class="text-primary m-l-5"><b>Login</b></a></p>
          </div>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="http://wrappixel.com/demos/admin-templates/pixeladmin/inverse-rtl/index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Pemulihan Kata Sandi</h3>
            <p class="text-muted">Masukan Email pengguna dan akan dikirimkan link pemulihan kata sandi ke email pengguna! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Masukan Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Kirim</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="{{ asset('login_asset/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('login_asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('login_asset/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('login_asset/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('login_asset/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('login_asset/js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('login_asset/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse-rtl/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 07:55:18 GMT -->
</html>


