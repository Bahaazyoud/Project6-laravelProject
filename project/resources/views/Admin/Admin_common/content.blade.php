<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green ">
                                        <i class="bi bi-book-fill mb-3 me-2"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Books</h6>
                                    <h6 class="font-extrabold mb-0">{{count($books)}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Subscribers</h6>
                                    <h6 class="font-extrabold mb-0">{{count($users)}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green ">
                                        <i class="bi bi-envelope-fill mb-3 me-2"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Messages</h6>
                                    <h6 class="font-extrabold mb-0">{{count($contacts)}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">types</h6>
                                    <h6 class="font-extrabold mb-0">{{count($categories)}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest messages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $end=count($contacts);
                                        @endphp
                                        
                                        @foreach ($contacts->slice($end-2,2) as $contact)
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/faces/2.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">{{$contact->name}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">{{$contact->message}}</p>
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
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="assets/images/faces/1.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">Welcome</h5>
                            @if(isset($admin[0]))
                            <h6 class="text-muted mb-0">{{$admin[0]['name']}}</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Recent Users</h4>
                </div>
                <div class="card-content pb-4">
                   
                    @php
                    $endU=count($users);
                    @endphp
                    
                    @foreach ($users->slice($endU-3,3) as $user)
                    <div class="recent-message d-flex px-4 py-3 overflow-hidden">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/4.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">{{$user->Fname}}</h5>
                        </div>
                    </div>
                    @endforeach
                    <div class="px-4">
                        <a class='btn btn-block btn-xl btn-outline-primary font-bold mt-3' href="/admin/users">All Users</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>
