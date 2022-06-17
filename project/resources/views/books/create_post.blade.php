@extends('layout')

@section('content')

	<div class="register">

		<div class="container">
			
			<div class="row row-eq-height" >
				<div class="col-lg-6 nopadding" style="background: url(log/images/back10.jpg) ; background-size:cover">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title"> <span></span> </h1>
						</div>
						<div class="register_content text-center">
							<p class="register_text"></p>
						</div>	
						
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(log/images/bac2.jfif);"></div>
						@if ($message = Session::get('succe'))
						<div class="alert alert-success" role="alert">
							{{$message}}
						</div>
						@endif
						<div class="search_content text-center">
							<h1 class="search_title mt-4">Publish Your Book</h1>
							<form id="search_form" class="search_form" method="POST" action="create-post" enctype="multipart/form-data">
								@csrf
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Book Name" required="required" name="book_name" >

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Book Brief" required="required" name="book_breif">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Publiser" required="required" name="publisher">

								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Author" required="required" name="author">

								<input id="search_form_name" class="input_field search_form_name" type="number" placeholder="Pub.Year" min="1000" max="2022" required="required" name="publish_year">


								<select name="category" id="" class="input_field search_form_category">
									<option  disabled selected>Choose Book Category</option>
									@foreach ($categories as $category)
									<option value="{{$category->id}}" >{{$category->name}}</option>
									@endforeach
								</select>

								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Address" name="address">

								<input id="search_form_degree" class="input_field search_form_degree form-control" type="file"  placeholder="Address" name="book_image">

								<button id="search_submit_button" type="submit" class="search_submit_button trans_200 mb-4" value="Submit">Publish</button>

							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
		<div class="mb-5"></div>

@endsection