<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IIC</title>
    <link rel="shortcut icon" href="{{asset("images/logo.png")}}" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ asset('css/stylesheet_main_layout.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <style type="text/css">


        .notfication-mail-header {
            margin: 0;
            background-color: #ecf0f1;
        }
    </style>
</head>

<body style="padding: 0; ">
<div class="container-fluid row ">
    <div class="col-12 notfication-mail-header d-flex align-content-start" style="height: 100px">
        <div class="col-4"><img src="{{ asset('images/logo.png') }}" width="90px;" style="margin-top: 2%;"
                                class="img-fluid">

        </div>
        <div class="d-flex flex-column align-items-center">
            <h2 style="margin-top: 2%; opacity: 0.8 ; "> Incubation and innovation center</h2>
            <h3> Mail subject will go here </h3>
        </div>
    </div>
    <div class="col-12 d-flex align-content-start">
        <div class="col-4"><img src="{{ asset('images/logo.png') }}" width="90px;" style="margin-top: 2%;"
                                class="img-fluid">

        </div>
        <div class="d-flex flex-column align-items-center">
            <h2 style="margin-top: 2%; opacity: 0.8 ; "> Incubation and innovation center</h2>

            <h3> Mail subject will go here </h3>
        </div>
    </div>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous">


</script>
<script>$(document).ready(function () {
        $('body').bootstrapMaterialDesign();
    });</script>
</body>
</html>