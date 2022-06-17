<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="log/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(log/images/back10.jpg);">
	

	<section class="ftco-section" style="  padding-bottom: 20em;padding-top: 14em;">
		<div class="container">
			<div class="row justify-content-center">
				
				<div class="col-md-6 text-center mb-3">
					
					<h2 class="heading-section">Forget Password </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      
		      	<form action="/forget" class="signin-form" method="post">
					@csrf
		      		<div class="form-group mb-3">
		      			<input type="text" class="form-control" name="forget_email" placeholder="Email address" required>
		      		</div>

                      @if ( $message = Session::get('sent'))
                        <div style="color: red ; text-algin:center">{{$message}}</div>
                      @endif

                      @if ( $message = Session::get('miss_email'))
                        <div style="color: red">{{$message}}</div>
                      @endif
                      @if ( $message = Session::get('connect'))
                        <div style="color: red">{{$message}}</div>
                      @endif
                      
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" >Send Email</button>
	            </div>
                
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

