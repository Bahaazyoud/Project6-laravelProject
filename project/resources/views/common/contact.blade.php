@extends('layout')

@section('content')

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(layout/images/splash3.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>
    <style>
        ::-webkit-scrollbar {
            width: 20px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #ffb606ed;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #d69a0a;
        }
    </style>
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>

						<div class="contact_form_container">
                        @if ($message = Session::get('success'))
     <div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
							<form action="contact" method="POST">
                               @csrf
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required." name="name">
								<input id="contact_form_email" class="input_field contact_form_email mb-3" name="email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send message</button>
							</form>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Find us</div>
						<p class="about_text">We work on providing better online association for readers.Easy and smooth describes our vision on facilitating the exchange process. </p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="style/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									jordan
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<a href="tel:123-456-7890" style="text-decoration:none;color:#a5a5a5 ">		<img src="style/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0775673452</a>
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<a href = "mailto: shineorg@company.com" style="text-decoration:none;color:#a5a5a5 "><img src="style/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>shineorg@company.com</a>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>


		</div>
	</div>



@endsection
