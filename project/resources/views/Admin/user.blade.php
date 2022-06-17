<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/png">

<link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">

</head>
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
<body>
    <div id="app">
        @include('Admin.Admin_common.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
    @if(session()->has('message'))
    <div class="alert alert-warning" role="alert">
        {{session('message')}}
      </div>

@endif
    <h3><a href="/dashboard" class="text-warning">Dashboard</a><span> / Users</span></h3>
</div>
<section class="section">
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Users</h4>
                    <h4 class="card-title"><a href="{{url('signup')}}" class="btn btn-warning mt-3 fw-bold">Create User</a></h4>

                </div>
                <div class="card-content">
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NAME</th>
                                    <th>User Id</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                <td class="text-bold-500">{{$user['Fname']}} {{$user['Lname']}}</td>
                                <td>{{$user['id']}}</td>
                                <td>{{$user['email']}}</td>
                                <td class="text-bold-500">{{$user['phone']}}</td>
                                <td>{{$user['address']}}</td>
                                <td>
                                    <form method="POST" action="/admin/user/{{$user->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Delete</button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        @include('Admin.Admin_common.footer')
        </div>
    </div>
    <script src="{{asset('assets/js/app.js')}}"></script>

<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

</body>

</html>
