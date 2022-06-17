@extends('layout')




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>book</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="shop_assets/css/color-01.css">
    <style>
        #card {

            border-style: initial;

        }
    </style>
</head>
@section('content')
<br><br>
<br><br>
<br><br>
<br><br>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <!-- <header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="nav-section header-sticky">


					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="shop.html" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="cart.html" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">

                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>

                    <li class="item-link"><span>categories</span></li>

                </ul>

            </div>
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">Book shelf</h2>
                        <div class="widget-content">
                            <ul class="list-category">


                                @foreach ($category as $item)


                                <form method="POST" action="shop" accept-charset="UTF-8" style="display:inline">
                                    {{ csrf_field() }}
                                    <li class="category-item has-child-cate">
                                        <input type="hidden" name="cat_id" value="{{$item->id}}">
                                        <button class="cate-link" style="background: none ; border: none ; margin-bottom: 10px">{{$item->name}}</button>
                                    </li>

                                </form>

                                {{-- <li class="category-item has-child-cate">
									<a href="{{route('shop.show_cat',$item->id)}} {{ route('movies.show' , $item->id) }}" class="cate-link">{{$item->name}}</a>
                                </li> --}}

                                @endforeach


                            </ul>
                        </div>
                    </div><!-- Categories widget-->


                </div>



                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">Books & novels</h1>

                        <div class="wrap-right">

                            <div class="sort-item orderby ">
                                <select name="orderby" class="use-chosen">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    {{-- <option value="price">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option> --}}
                                </select>
                            </div>

                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="use-chosen">
                                    <option value="4" selected="selected">4 per page</option>
                                    <option value="6">6 per page</option>
                                    <option value="8">8 per page</option>
                                    <option value="10">10 per page</option>
                                    {{-- <option value="24">24 per page</option>
									<option value="30">30 per page</option>
									<option value="32">32 per page</option> --}}
                                </select>
                            </div>

                            <div class="change-display-mode">
                                <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                                {{-- <a href="/shop" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a> --}}
                            </div>

                        </div>

                    </div>
                    <!--end wrap shop control-->

                    <div class="row">

                        <ul class="product-list grid-products equal-container ">

                            @foreach ($book as $item)
                            @if($item->state == '1')
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 " id="card">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="/post" title="book">
                                            <figure><img src="{{asset('storage/'.$item->book_image)}}" alt="book" id="shopim" width="310px" style="height:310px"></style>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="wrap-price"><span class="product-price">{{$item->name}}</span></div>
                                        <style>
                                            ::-webkit-scrollbar {
                                                width: 20px;
                                            }

                                            .btn-warning {
                                                width: 40px;
                                                font-size:17px;
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
                                        <a href="/post" class="product-name"><span style="height:100px;">{{$item->description}}</span></a>
                                        {{-- <a href="single/{{$item->id}}" class="btn add-to-cart">view book</a> --}}

                                        {{-- <a href="#" class="product-name"><span>{{$item->description}}</span></a> --}}
                                        <a href="post/{{$item->id}}" class="btn add-to-cart">view details</a>

                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach





                        </ul>

                    </div>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                </div>
                <!--end main products area-->
                {{-- <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">


								@foreach ($category as $item)


								<form method="POST" action="shop" accept-charset="UTF-8" style="display:inline">
									{{ csrf_field() }}
                <li class="category-item has-child-cate">
                    <a href="#" class="cate-link">{{$item->name}}</a>
                </li>
                <input type="hidden" value="{{$item->id}}" name="cat_id">

                </form> --}}

                {{-- <li class="category-item has-child-cate">
									<a href="{{route('shop.show_cat',$item->id)}} {{ route('movies.show' , $item->id) }}" class="cate-link">{{$item->name}}</a>
                </li> --}}

                {{-- @endforeach


							</ul>
						</div>
					</div> --}}
                <!-- Categories widget-->


            </div>

            <!--end sitebar-->

        </div>
        <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->




    <script src="shop_assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="shop_assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="shop_assets/js/bootstrap.min.js"></script>
    <script src="shop_assets/js/chosen.jquery.min.js"></script>
    <script src="shop_assets/js/owl.carousel.min.js"></script>
    <script src="shop_assets/js/jquery.countdown.min.js"></script>
    <script src="shop_assets/js/jquery.sticky.js"></script>
    <script src="shop_assets/js/functions.js"></script>
</body>
@endsection


</html>
