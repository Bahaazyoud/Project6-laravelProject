@extends('layout')

<style>
#team {
    padding: 20px 0;
    text-align: center;
    /* background-color: #d1d1d1; */
    color: #145889;
}

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
#team h2 {
    position: relative;
    padding: 0px 0px 15px;
}
#team p {
    font-size: 15px;
    font-style: italic;
    padding: 0px;
    margin: 0px 0px 0px;
}
#team h2::after {
    content: '';
    border-bottom: 1px solid #fff;
    position: absolute;
    bottom: 0px;
    right: 0px;
    left: 0px;
    width: 90px;
    margin: 0 auto;
    display: block;
}
#team .member {
    margin-bottom:10px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    padding: 0px;
    border-radius: 5px 0px 5px 0px;
    box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
}
#team .member .member-info {
    display: block;
    position: absolute;
    bottom: 0px;
    left: -200px;
    transition: 0.4s;
    padding: 15px 0;
    background: rgba(0, 0, 0, 0.4);
}
#team .member:hover .member-info {
    left: 0px;
    right: 0px;
}
#team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff;
}
#team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}
#team .member .social-links {
    margin-top: 15px;
}
#team .member .social-links a {
    transition: none;
    color: #fff;
}
#team .member .social-links a:hover {
    color: #ffc107;
}
#team .member .social-links i {
    font-size: 18px;
    margin: 0 2px;
}
</style>



	<!-- Home -->


    @section('content')


	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(layout/images/splash18.jpg)"></div>
		</div>
		<!-- <div class="home_content">
			<h1>about us</h1>
		</div> -->
	</div>


    <div class="m-5 ">
  <div class="row">
    <div class="col-lg-6 col-md-12">
    <img src="style/images/about-image.jpeg" class="img-thumbnail" alt="">

    </div>
    <div class="col-lg-6 col-md-12">
   <p  class="lead text-center text-dark" style=" font-style:italic";>
   <strong style="font-size:40px;"> Our site</strong>
	<br>the general vision of the site is determined in raising the local, Arab and international cultural and scientific level, where a group of writers, intellectuals and academics are based on this site, who are interested in providing sound, purposeful and fruitful content, in cooperation with all supporting bodies and individuals, free of charge available to all groups and societal groups of all kinds.
</p>
</div>
  </div>
  </div>


		<section id="team">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 mb-4">
						  <h1 style="color: #3a3a3a;font-size:40px;">Our team is here to help</h1>
						  <p>It is true that you can succeed best and quickest by helping others to succeed</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img" >
								  <img src="style/images/name1.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Aiman jaradat</h4>
									<span>Team leader </span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/name2.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Abdullah assoli</h4>
									<span>Web Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/name3.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Baha Zyoud</h4>
									<span>Web Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/name6.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Kaled Bani_amer</h4>
									<span>SEO Expert</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/name4.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>Tasnem Baibars</h4>
									<span>ISO Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="member">
							  <div class="member-img">
								  <img src="style/images/name5.png" class="img-fluid" alt="">
							  </div>
								<div class="member-info">
									<h4>shifa alkasasbeh</h4>
									<span>ISO Developer</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


	<!-- Footer -->

@endsection
