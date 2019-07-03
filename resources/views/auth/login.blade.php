
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Supply Chain - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	{{-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                    @csrf
					<div class="wrap-input100 validate-input " data-validate = "Enter username">
					
						<input class="input100 " type="email" id="inputEmail" name="email" placeholder="Email" value="{{ old('email') }}">
						
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						@if ($errors->has('email'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
					
					<div class="wrap-input100 validate-input " data-validate="Enter password">
						<input class="input100 " type="password" id="inputPassword" name="password" placeholder="Password">
						
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						@if ($errors->has('password'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
	<script src="vendor/daterangepicker/daterangepicker.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
<!--===============================================================================================-->
	<script src="js/main.js" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="a1f20b3911d8bc6b87b0c872-text/javascript"></script>
	<script type="a1f20b3911d8bc6b87b0c872-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="a1f20b3911d8bc6b87b0c872-|49" defer=""></script></body>
</html>
