@extends("app")
@section('content')
    <div class="row d-flex justify-content-center " style="margin-top: 5%;">
        <form class="col-6" action="{{route('login')}}" method="post">
            @csrf
            <div class="card shadow ">
                <div class="card-header" style="background: #1d68a7; color: white;">
                    <h2>Login</h2>
                </div>

                <div class="card-body">
                    @if(! empty($error) )
                        <h4 style="color: red; margin-left: 5%;"><i class="fas fa-exclamation-circle"
                                                                    style="margin-right: 1%;"></i>{{$error}}</h4>

                    @endif

                    <div class="md-form">
                        <i class="fas fa-envelope prefix indigo-text fa-2x"></i>
                        <input type="email" id="inputValidationEx" class="form-control validate" name="email">
                        <label for="inputValidationEx" data-error="wrong" data-success="right">Type your email</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-lock prefix indigo-text fa-2x"></i>
                        <input type="password" id="inputValidationEx2" class="form-control validate" name="password">
                        <label for="inputValidationEx2" data-error="wrong" data-success="right">Type your
                            password</label>
                    </div>
                </div>
                <div class="card-footer">
                    <div class=" d-flex justify-content-center">
                        <a href="#" class="btn btn-secondary col-auto">Forgot your
                            password ?</a>
                        <input class="btn btn-primary col-auto" value="Log in" type="submit">
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection