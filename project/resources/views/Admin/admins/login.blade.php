<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/auth.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/png">
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
</head>

<body>
    <div id="auth">

<div class="row h-100">
    <div class="col-lg-8 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a><img src="{{asset('image/logo.png')}}"  alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle">Log in with your data that you entered during registration.</p>

            <form action="{{url('admin/login')}}" method="post">
                @csrf
                <div class="form-group position-relative has-icon-left">
                    <input type="email" name="email" class="form-control form-control-xl" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                @if(session()->has('message'))
                <p class="text-danger">
                    {{session('message')}}
                </p>
                @endif

                <button type="submit" class="btn btn-warning fw-bold btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-yellow-600">Not Admin <a href="{{url('home')}}" class="font-bold text-warning">Click here</a>.</p>
                <p><a href="#" class="font-bold text-warning" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
