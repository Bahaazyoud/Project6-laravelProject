<!doctype html>
<html lang="en">
  <head>
  	<title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="log/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(log/images/back10.jpg);">
		 
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
				<div class="col-md-6 text-center mb-3">
					
					<h2 class="heading-section">Sign Up </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<div class="card-body">
							@if ($message = Session::get('success'))
							<div class="alert alert-success">
							<p>{{ $message }}</p>
							</div>
							@endif
		      
		      	<form action="signup" class="signin-form" method="post">
					@csrf
		      		<div class="form-group ">
		      	  <input type="text" value="{{old('fname')}}" class="form-control" placeholder="Firstname" name="fname"  style="margin-bottom: 10px" required>
				  @error('fname')
					  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				  @enderror 
				  <input type="text" value="{{old('lname')}}" class="form-control" placeholder="Lastname" name="lname"  style="margin-bottom: 10px" required>
				  @error('lname')
				  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				@enderror 
				  <input type="email" value="{{old('email')}}" name="email" id="" class="form-control" placeholder="Email"  style="margin-bottom: 10px" required>

				  @error('email')
				  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				@enderror 
	              <input id="password-field" type="password" name="pass" class="form-control" placeholder="Set Password"  style="margin-bottom: 10px" required>

				  @error('pass')
				  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				  <ul>
					<li style="text-shadow: 0 0 3px #9d9d9d;">one Uppercase letter.</li>
					<li style="text-shadow: 0 0 3px #9d9d9d;">one Lower case letter.</li>
					<li style="text-shadow: 0 0 3px #9d9d9d;">one number.</li>
					<li style="text-shadow: 0 0 3px #9d9d9d;">one special character.</li>
					<li style="text-shadow: 0 0 3px #9d9d9d;">at least 8 characters long.</li>
				</ul>
				@enderror 
			

				  <input id="password-field"  type="password" name="pass2" class="form-control " placeholder="Confirm Password"  style="margin-bottom: 10px" required>  
				  @error('pass2')
				  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				@enderror 
				 
				  <input type="text" value="{{old('phone')}}" name="phone" id="" class="form-control" placeholder="Phone number"  style="margin-bottom: 10px" required>

				  @error('phone')
				  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				@enderror 

	            </div>
                <select class="form-control mb-3" name="address" style="background-color:black">
                    <option disabled selected hidden > Select region</option>
					<option value="amman" > Amman</option>
					<option value="irbid"> Irbid</option>
					<option value="zarqa"> Zarqa</option>
					<option value="ajloun"> Ajloun</option>
					<option value="aqaba"> Aqaba</option>
					<option value="salt"> Al-salt</option>
					<option value="mafraq"> Mafraq</option>
					<option value="tafeleh"> Al-tafeleh</option>
					<option value="karak"> karak</option>
					<option value="ma'an"> Ma'an</option>
					<option value="balqaa"> Balqaa</option>
					<option value="ma'adaba"> Ma'adaba</option>
                  </select>

				  @error('address')
				  <div style="color: #ff0000;text-shadow: 0px 1px 8px #ff0202;">{{$message}}</div>
				@enderror 
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="signup">Sign Up</button>
	            </div>
								<div class="">
									Have an account?<a href="http://localhost:8000/login" style="color: #fff;text-decoration:underline"> Signin</a>
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

