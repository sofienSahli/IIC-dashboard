@extends('main_app')
@section('content')
    <nav class="navbar navbar-dark default-color-dark">
        <h4 style="color: white;"> All accounts</h4>
        <form class="form-inline my-2 my-lg-0 ml-auto" action="{{ route('find-user') }}" method="post">
            <div class="md-form">
                @csrf
                <input type="text" id="form1" class="form-control col-auto" name="query" required
                       placeholder="User Name">

            </div>
            <button class="btn btn-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
        </form>
    </nav>
    <div id="users_management" xmlns:v-on="http://www.w3.org/1999/xhtml">


        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin" role="tab"
                   aria-controls="home"
                   aria-selected="true">New Admin Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="statuper-tab" data-toggle="tab" href="#statuper" role="tab"
                   aria-controls="profile"
                   aria-selected="false">New Startuper Account</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active row" id="admin" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-12">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col"> Work</th>
                            <th scope="col">Applicant phone number</th>
                            <th scope="col"> User's email</th>
                            <th scope="col"> User's status</th>
                            <th scope="col"></th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            @if($user->role == "Admin")
                                <tr>
                                    <td><img src="{{ asset($user->profile_picture) }}" class="img-fluid">
                                    </td>

                                    <td><a href="/">{{ $user->name . " ". $user->last_name  }} </a></td>
                                    <td> {{ $user->degree }}</td>
                                    <td> {{ $user->phone_number }} </td>
                                    <td>{{$user->email  }}</td>

                                    @if($user->isActive)
                                        <td><i class="fas fa-check-circle green-text"></i> Started working</td>
                                    @else
                                        <td><i class="fas fa-exclamation-triangle yellow-text"></i> Not yet working</td>
                                    @endif
                                    <td>
                                        @if($user->isActive)
                                            <form method="post" action="{{route('ban_account')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <input type="submit" class="btn btn-danger" value="Ban account">
                                            </form>

                                        @else
                                            <form method="post" action="{{route('activate_account')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <input type="submit" class="btn btn-green" value="Activate">
                                            </form>

                                        @endif
                                        <form method="post" action="{{route('visit_profile')}}">
                                            @csrf

                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <input type="submit" class="btn btn-primary" value="Full profile">
                                        </form>

                                        <a href="{{ url('message/'.$user->id) }}">
                                            <button class="btn btn-amber col-auto"><i class="fas fa-comment-alt"></i>
                                                Message
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>


                </div>

            </div>
            <div class="tab-pane fade" id="statuper" role="tabpanel" aria-labelledby="profile-tab">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col"> Work</th>
                        <th scope="col">Applicant phone number</th>
                        <th scope="col"> User's email</th>
                        <th scope="col"> User's status</th>
                        <th scope="col"> Is presentation submited</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        @if($user->role == "Startuper")
                            <tr>
                                <td><img src="{{ asset($user->profile_picture) }}" class="img-fluid" width="150px;">
                                </td>

                                <td><a href="/">{{ $user->name . " ". $user->last_name  }} </a></td>
                                <td> {{ $user->degree }}</td>
                                <td> {{ $user->phone_number }} </td>
                                <td>{{ $user->email  }}</td>

                                @if($user->isActive)
                                    <td><i class="fas fa-check-circle green-text"></i> Started working</td>
                                @else
                                    <td><i class="fas fa-exclamation-triangle yellow-text"></i> Not yet working</td>
                                @endif


                                <td>
                                    @if($user->isActive)
                                        <form method="post" action="{{route('ban_account')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <input type="submit" class="btn btn-danger" value="Ban account">
                                        </form>

                                    @else
                                        <form method="post" action="{{route('activate_account')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <input type="submit" class="btn btn-green" value="Activate">
                                        </form>

                                    @endif

                                    <form method="post" action="{{route('visit_profile')}}">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <input type="submit" class="btn btn-primary" value="Full profile">
                                    </form>

                                    <a href="{{ url('message/'.$user->id) }}">
                                        <button class="btn btn-amber col-auto"><i class="fas fa-comment-alt"></i>
                                            Message
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endif

                    @endforeach
                    </tbody>
                </table>


            </div>

        </div>
    </div>

@endsection