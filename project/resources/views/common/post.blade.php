@extends('layout')
@section('content')
<!-- Home -->
<div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx"> <img src="/style/images/book4.jpg" alt="" height="600px" width="100%"></div>
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
<div class="news ">
    <div class="container">
        <div class="row align-items-top">
            <!-- News Post Column -->
            <style>
                .price_box {
                    margin-top: 0px;
                }

                .home {
                    width: 100%;
                    height: 80vh;
                }
            </style>
            <div class="col-lg-12 course_box d-flex align-items-top" style="padding-bottom:100px;margin-top:0px">
                <div class="card d-flex col-7" style="margin-right:20px">
                    <img class="card-img-top" src="{{asset('storage/'.$data->book_image)}}" alt="https://unsplash.com/@kellybrito" height="600px">
                </div>
                <div class="price_box d-flex flex-row align-items-center">
                    <div class="course_author_image">
                        <img src="{{asset('layout/images/author.jpg')}}" alt="https://unsplash.com/@mehdizadeh">
                    </div>
                    <div class="course_author_name">{{$userdata->Fname}} <span style="margin-right:10px;color:#ffb606">{{$userdata->Lname}}</span><span><i class="fas fa-circle" style="font-size:7px;color:black"></i></span><span style="padding-left:10px;color:black;font-size:15px">Get in touch with</span></div>
                    <div class="course_price d-flex flex-column align-items-center justify-content-center"><span><a href="/chat" style="color:white;"><i class="fas fa-comments" style="font-size:35px"></i></a></span></div>
                    <hr>
                    <div class="card" style="position:absolute;left:0%;top:100%;margin-top:0px;width:100%">
                        <div style="background-color:white;color:black;padding:10px 20px"><b>Book name</b> : {{$data->name}}</div>
                        <hr>
                        <div style="background-color:white;color:black;padding:10px 20px"><b>Publisher</b> : {{$data->publisher}}</div>
                        <hr>
                        <div style="background-color:white;color:black;padding:10px 20px"><b>Publishing_year</b>: {{$data->publishing_year}}</div>
                        <hr>
                        <div style="background-color:white;color:black;padding:10px 20px"><b>Author</b>: {{$data->author}}</div>
                        <hr>
                        @if (session()->has('name'))

                        <div style="background-color:white;color:black;padding:10px 20px"><b>Volunteer number</b>: {{$userdata->phone}}</div>
                        <div style="background-color:#ffb606;color:black;padding:10px 20px"><b>Description :</b></div>
                        @else
                        <div style="background-color:white;color:black;padding:10px 20px"><b>Volunteer number</b>: 07xxxxxx <a href="/login" class="text-danger">Please Login </a></div>
                        <div style="background-color:#ffb606;color:black;padding:10px 20px"><b>Description :</b></div>
                        @endif
                        <div style="padding:20px 40px;color:black;font-weight:500;letter-spacing:0.5px;">{{$data->description}}</div>
                        <br>
                        <br>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->

    @endsection
