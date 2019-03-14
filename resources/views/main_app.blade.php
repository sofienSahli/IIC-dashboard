<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="token" content="{{ csrf_token()}}">

    <title>IIC</title>

    <link rel="shortcut icon" href="{{asset("images/logo.png")}}" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ asset('css/stylesheet_main_layout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet_main_layout.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay " style="height: 100vh;">
    <header class="bmd-layout-header ">
        <div class="navbar navbar-light bg-faded  d-flex justify-content-start">
            <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
                <span class="sr-only">Toggle drawer</span>
                <i class="material-icons">
                    menu</i>
            </button>
            <img src="{{asset('images/logo.png')}}" style="width:75px; margin-left: 3%;"/>
            @if(!empty($title))
                <h3 style="margin-left: 4px;">{{ $title }} </h3>
            @endif
        </div>


    </header>

    <div id="dw-s1" class="bmd-layout-drawer bg-faded">
        <header class="d-flex justify-content-center shadow">
            @if(Session::has('user')   )
                @if( Session::get('user')->role == "Startuper")
                    <script> window.location = "/login"; </script>
                @endif
                <img src="{{ asset(Session::get('user')->profile_picture)  }}" class="img-thumbnail"/>
                <a class="navbar-brand">{{ Session::get('user')->last_name." ".Session::get('user')->name }}</a>
                <button class="btn-primary"> {{Session::get('user')->email }}</button>

        </header>

        <ul class="list-group ">
            <a class="list-group-item " href="{{route('dashboard')}}"><i class="fas fa-chart-line"></i> Dashboard </a>

            <a class="list-group-item " href="{{route('applicationIndex')}}">
                <i class="fas fa-table"></i>
                Expected Vote <span class="badge badge-primary" id="submited-to-vote-badge">
                    </span>
            </a>

            <a class="list-group-item "><i class="far fa-address-card"></i>App. Reviews </a>

            @if(Session::get('user')->role =='Super Admin')
                <a class="list-group-item d-md-inline-flex" href="{{route('user_management')}}"><i
                            class="fas fa-users"></i> All accounts
                    <span class="badge badge-primary" style="margin: 1%;" id="accounts_badge"> 0</span>
                </a>

                <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
                <script type="text/javascript">


                    var pusher = new Pusher('fa2d81006f4d56b91ca3', {
                        cluster: 'ap2',
                        forceTLS: true
                    });

                    var channel = pusher.subscribe('account-creation');
                    channel.bind('my-event', function (data) {
                        notifyMe();
                    });

                    document.addEventListener('DOMContentLoaded', function () {
                        if (!Notification) {
                            alert('Desktop notifications not available in your browser. Try Chromium.');
                            return;
                        }

                        if (Notification.permission !== "granted")
                            Notification.requestPermission();
                    });


                    function notifyMe() {
                        if (Notification.permission !== "granted")
                            Notification.requestPermission();
                        else {
                            var notification = new Notification("New Account creation", {
                                icon: '{{ asset('images/logo.png') }}',
                                body: "new Account has been created",
                            });

                            notification.onclick = function () {
                                window.open('{{ route('dashboard') }}');
                            };

                        }
                    }

                </script>
            @endif
            @else
                <script> window.location = "/login"; </script>
            @endif


            <a class="list-group-item"><i class="far fa-address-card"></i> My profile</a>
            <a class="list-group-item"><i class="fas fa-calendar-alt"></i> My tasks</a>
            <a class="list-group-item" href="{{route('logout') }}"><i class="fas fa-sign-out-alt"></i> Log out</a>
        </ul>
    </div>
    <script src="{{asset('js/Chart.js')}}" type="text/javascript"></script>

    <main class="bmd-layout-content" style="height: 100%; width: 100%;">
        <div class="container-fluid" style=" padding: 0;">


            @yield('content')


        </div>
    </main>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>

<script> $(document).ready(function () {
        $('body').bootstrapMaterialDesign();
    });</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/js/mdb.min.js"></script>
<script src="{{ asset('js/drawerAjax.js') }}"></script>

</body>
</html>