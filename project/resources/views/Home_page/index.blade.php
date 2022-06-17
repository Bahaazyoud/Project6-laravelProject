@extends('layout')

@section('content')
<div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel" style="height:100vh">

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('layout/images/splash9.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">

                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">“A reader lives a thousand lives before he dies . . . The man who never reads lives only one.” - George R.R. Martin</h1>
                        <br>
                        <a href="http://localhost:8000/shop" style="text-decoration: none;" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><button type="button" class="btn btn-outline-light" style="font-size:22px;">View Books </button></a>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('layout/images/splash17.jpg')}});"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Don't put your books on shelves and desks. Give them wings, airline tickets, and happy memories.</h1>
                        <br>
                        <a href="http://localhost:8000/shop" style="text-decoration: none;" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><button type="button" class="btn btn-outline-light" style="font-size:22px;">View Books </button></a>


                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('layout/images/splash16.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">"There is no delight in owning anything unshared.”</h1>
                        <br>
                        <a href="http://localhost:8000/shop" style="text-decoration: none;" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><button type="button" class="btn btn-outline-light" style="font-size:22px;">View Books </button></a>

                    </div>
                </div>
            </div>

        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"><i class="material-icons" style="font-size:45px; color:white;    position: relative;
    top: 50%;
    transform: translateY(300%);">&#xe314;</i></span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200"><i class="material-icons" style="font-size:45px;color:white;    position: relative;
    top: 50%;
    transform: translateY(300%); ">&#xe315;</i></span></div>
    </div>

</div>
<!-- Popular -->

<div class="popular page_section" style="margin-top:300px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Books Category</h1>
                </div>
            </div>
        </div>

        <div class="row course_boxes">

            <!-- Popular Course Item -->
            @foreach ($catig as $category)
            <div class="col-lg-4 course_box mt-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('storage/'.$category->image)}}" height="400px" width="130%" alt="https://unsplash.com/@kellybrito">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">{{$category->name}}</a></div>
                        <div class="card-text">Best guide for fantasy world</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="layout/images/small.jpg" id="cat" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name"><span>publisher</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span><a href="{{url('/shop')}}"><span><i class="material-icons" style="font-size:35px; color:white;margin-top:10px;">&#xe315;</i></span></a></span></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



<!-- Popular Course Item -->

<!-- Register -->



<!-- Services -->

<div class="services page_section">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>

        <div class="row services_row">

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{asset('layout/images/earth-globe.svg')}}" alt="">
                </div>
                <h3>Online association</h3>
                <p>In books we help you to find and share the books you want so bad.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{asset('layout/images/exam.svg')}}" alt="">
                </div>
                <h3>Latest books</h3>
                <p>One of our goals is to provide passionate readers with the latest books.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="{{asset('layout/images/books.svg')}}" alt="">
                </div>
                <h3>Amazing Library</h3>
                <p>You will never feel bored with us ,you will always find vairety of amazing books you would enjoy reading .</p>
            </div>



        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials page_section">
    {{-- <div class="testimonials_background" style="background-image:url({{asset('layout/images/splash14.jpg')}})">
</div> --}}
<div class="testimonials_background_container prlx_parent">
    <div class="testimonials_background prlx" style="background-image:url({{asset('layout/images/splash8.jpg')}})"></div>
</div>
<div class="container">

    <div class="row">
        <div class="col">
            <div class="section_title text-center">
                <h1>What our readers say</h1>
            </div>
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
  background:#d69a0a;
}

</style>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">

            <div class="testimonials_slider_container">

                <!-- Testimonials Slider -->
                <div class="owl-carousel owl-theme testimonials_slider">

                    <!-- Testimonials Item -->
                    <div class="owl-item">
                        <div class="testimonials_item text-center">
                            <div class="quote">“</div>
                            <p class="testimonials_text">Thank you books for affording me this chance ,I was looking for this book for along time.</p>
                            <div class="testimonial_user">
                                <div class="testimonial_image mx-auto">
                                    <img src="{{asset('layout/images/teacher_3.jpg')}}" alt="">
                                </div>
                                <div class="testimonial_name">james cooper</div>
                                <div class="testimonial_title">literature student</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials Item -->
                    <div class="owl-item">
                        <div class="testimonials_item text-center">
                            <div class="quote">“</div>
                            <p class="testimonials_text">Books you own me a favor Finally I have my organized shelf back & I am super happy I know a lot of people will use these books.</p>
                            <div class="testimonial_user">
                                <div class="testimonial_image mx-auto">
                                    <img src="{{asset('layout/images/teacher_4.jpg')}}" alt="">
                                </div>
                                <div class="testimonial_name">james cooper</div>
                                <div class="testimonial_title">passionate reader</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials Item -->
                    <div class="owl-item">
                        <div class="testimonials_item text-center">
                            <div class="quote">“</div>
                            <p class="testimonials_text">Finally I can read and share books regulary.</p>
                            <div class="testimonial_user">
                                <div class="testimonial_image mx-auto">
                                    <img src="{{asset('layout/images/teacher_1.jpg')}}" alt="">
                                </div>
                                <div class="testimonial_name">james cooper</div>
                                <div class="testimonial_title">Loyal Customer</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
</div>

<!-- Events -->

<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>outstanding Events</h1>
                </div>
            </div>
        </div>

        <div class="event_items">

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">23</div>
                                <div class="event_month">April</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">World Reading Day</a></div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="{{asset('layout/images/event_1.jpg')}}" alt="https://unsplash.com/@theunsteady5">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">15</div>
                                <div class="event_month">June</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Reading conference in Dubai</a></div>
                                <div class="event_location">Grand Central Park</div>
                                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="{{asset('layout/images/event_2.jpg')}}" alt="https://unsplash.com/@claybanks1989">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">


                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
