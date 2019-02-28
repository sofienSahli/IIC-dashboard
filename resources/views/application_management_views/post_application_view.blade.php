@extends('app')
@section('content')
    <div class="row">
        <div class="col-12 d-md-flex justify-content-center " style="margin-top: 5%;">
            <div class="card col-auto" style="padding: 0;">
                <div class="card-header ">

                    <h3>            <i class="fas fa-info-circle fa-2x blue-text" style="margin-left: 2%;"></i> Thank you for your application</h3>
                </div>
                <div class="card-body">
                    <p>
                        Thank you for your application. You will recieve an email with further details shortly.

                    </p>
                    <p> In case your download didn't start yet.</p>

                </div>


                <div class="card-footer d-md-flex justify-content-center">

                    <br>
                    <a href="{{route('login')}}">
                        <button class="col-auto btn-primary btn"> Proceed to login</button>
                    </a>
                </div>
            </div>
        </div>

    </div>


@endsection