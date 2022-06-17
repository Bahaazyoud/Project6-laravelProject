<!DOCTYPE html>
<html lang="en">

<head>
    <title>books</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('layout/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/changable.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layout/styles/contact_responsive.css')}}">

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



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
                <!-- Logo -->
                <div class="logo_container">
                    <div class="logo">
                        <a href="/"><img src="{{asset('layout/images/logo.png')}}" height="60px" width="60px" alt="">
                            <span>Shine </span></a>
                    </div>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="/">home</a></li>
                            <li class="main_nav_item"><a href="/shop">Shop</a></li>
                            @if(session()->has('name'))
                            <li class="main_nav_item"><a href="/create-post">post</a></li>
                            @endif
                            <li class="main_nav_item"><a href="/about">about us</a></li>
                            <li class="main_nav_item"><a href="/contact">contact</a></li>
                            @if(!session()->has('name'))
                            {{-- <li class="main_nav_item"><a href="/logout">logout</a></li>
						@else --}}
                            <li class="main_nav_item"><a href="/login">login</a></li>
                            @endif
                            <li class="main_nav_item">
                                <form method="POST" action="/shop" accept-charset="UTF-8">
                                    {{ csrf_field() }}
                                    <input type="text" name="search" class="black form-control search-input">
                                    <button type="submit" class="btn btn-warning" style="margin-bottom:5px;"><i class="fas fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header_side d-flex flex-row justify-content-center align-items-center">
                @if(session()->has('name'))
                <p style="color: black ; margin-right: 20px; margin-top:15px ; font-size:20px ; font-weight:500"> {{session('name')}}</p>
                @endif
                <ul>
                    <div class="dropdown">
                        <a class="dropbtn"><img style="width: 70px;height: 60px;border-radius: 50%; " src="{{asset('user_img/'.session('user_img'))}}" alt=""></a>
                        <div class="dropdown-content">
                            @if(session()->has('name'))

                            <a href="/profile">Account</a>
                            <a href="/logout">Logout</a>
                            @else

                            <a href="/login">Login</a>
                            <a href="/signup">Signup</a>
                            @endif
                        </div>
                    </div>
                </ul>
            </div>

            <!-- Hamburger -->
            {{-- <div class="hamburger_container text-center mr-5">
            <a class=""><i class="material-icons" style="font-size:50px;color:#3a3a3a;margin-top:5px;">&#xe853;</i></a>
			<ul>
                <div class="dropdown">
                    <a class="dropbtn"><i class="material-icons" style="font-size:50px;color:black;margin-top:5px;">&#xe853;</i></a>

                  </div>
            </ul>
		</div> --}}
            <div class="hamburger_container ml-5">
                <i class="fas fa-bars trans_200"></i>

            </div>



        </header>

        <!-- Menu -->
        <div class="menu_container menu_mm">

            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="/">Home</a></li>
                        @if(session()->has('name'))
                        <li class="menu_item menu_mm"><a href="/create-post">post</a></li>
                        @endif
                        <li class="menu_item menu_mm"><a href="/shop">Categories</a></li>
                        <li class="menu_item menu_mm"><a href="/shop">Books</a></li>
                        <li class="menu_item menu_mm"><a href="/book">About us</a></li>
                        <li class="menu_item menu_mm"><a href="/contact">Contact</a></li>

                        @if(session()->has('name'))

                        <li class="menu_item menu_mm"> <a href="/Login">Login</a></li>
                        <li class="menu_item menu_mm"><a href="/signup">Signup</a></li>
                        @else
                        <li class="menu_item menu_mm"><a href="/profile">Account</a></li>
                        <li class="menu_item menu_mm"> <a href="/logout">Logout</a></li>

                        @endif

                    </ul>

                    <!-- Menu Social -->


                    <div class="menu_social_container menu_mm">
                        <ul class="menu_social menu_mm">
                            <li class="menu_social_item menu_mm"><a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <div class="menu_copyright menu_mm">books team</div>

                </div>

            </div>

        </div>

        <!-- Home -->














        @yield('content')












        {{-- IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII --}}





        <!-- Footer -->

        <footer class="footer">
            <div class="container">

                <!-- Newsletter -->

                {{-- <div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div> --}}

                <!-- Footer Content -->

                <div class="footer_content">
                    <div class="row">

                        <!-- Footer Column - About -->
                        <div class="col-lg-3 footer_col">

                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">

                                    <img src="{{asset('layout/images/logo.png')}}" height="60px" width="60px" alt="">
                                    <span>Shine</span>

                                </div>
                            </div>

                            <p class="footer_about_text">The general vision of the site is determined in raising the local, Arab and international cultural and scientific level.</p>

                        </div>

                        <!-- Footer Column - Menu -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Menu</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="/">Home</a></li>
                                    <li class="footer_list_item"><a href="/about">About Us</a></li>
                                    <li class="footer_list_item"><a href="/shop">Categories</a></li>
                                    <li class="footer_list_item"><a href="/shop">Books</a></li>
                                    <li class="footer_list_item"><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Usefull Links -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Usefull Links</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                    <li class="footer_list_item"><a href="#">FAQ</a></li>
                                    <li class="footer_list_item"><a href="#">Community</a></li>
                                    <li class="footer_list_item"><a href="#">Pictures</a></li>
                                    {{-- <li class="footer_list_item"><a href="#">Tuitions</a></li> --}}
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Contact -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">Contact</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="{{asset('layout/images/placeholder.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        Jordan
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="contact_info_icon">
                                            <a href="tel:123-456-7890" style="text-decoration:none;color:#a5a5a5 "> <img src="style/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        0775673452</a>
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="contact_info_icon">
                                            <a href="mailto: shineorg@company.com" style="text-decoration:none;color:#a5a5a5 "><img src="style/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>shineorg@company.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Copyright -->

                <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                    <div class="footer_copyright">
                        <span>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Books team <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                    <div class="footer_social ml-sm-auto">
                        <ul class="menu_social">
                            <li class="menu_social_item"><a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>

    </div>

    <script src="{{asset('layout/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('layout/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('layout/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('layout/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('layout/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('layout/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('layout/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('layout/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('layout/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('layout/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('layout/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('layout/js/custom.js')}}"></script>

</body>

</html>
