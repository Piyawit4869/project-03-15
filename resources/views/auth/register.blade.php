<!doctype html>
<html lang="en">
  <head>
  	<title>MEEKHWAMSOOK MILK TEA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{asset('authen/images/favicon.ico')}}" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('authen/css/style.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url(authen/images/project.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5" style="margin-top: 5%">
					<h2 class="heading-section">SIGN UP </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	       <h3 class="mb-4 text-center"></h3>
                        <form class="signin-form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" type="text" name="phone" class="form-control" placeholder="Phone" required>
                            </div>

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <input style="background-color: rgba(0, 0, 0, 0.589)" id="password" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                <span toggle="#password-field" toggle-password"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-left">
                                    <a href="{{ route('login') }}" style="color: #fff">LOG IN</a>
                                </div>
                            </div>
                        </form>
		            </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('authen/js/jquery.min.js') }}"></script>
  <script src="{{ asset('authen/js/popper.js') }}"></script>
  <script src="{{ asset('authen/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('authen/js/main.js') }}"></script>

	</body>
</html>

