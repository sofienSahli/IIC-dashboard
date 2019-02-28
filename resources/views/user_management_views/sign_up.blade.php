@extends('app')
@section('content')

    <div class="row" style="margin-top: 5%; margin-bottom: 5%;">
        @if(!empty($message))

            <h3 style="color: red; margin-left: 5%;">{{$message}}</h3>
        @endif
        <form class="col-12 form-row " id="inscription_form" method="post" action="{{route('sign_in')}}"
              enctype="multipart/form-data">
            @csrf

            <div class="col-6 align-items-lg-start">
                <div class="form-group col-auto">
                    <label for="name" id="name_label">First name</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                           placeholder="Your name">
                    </small>
                </div>

                <div class="form-group col-auto">
                    <label for="last_name" id="last_name_label">Last name</label>
                    <input name="last_name" type="text" class="form-control" id="last_name"
                           aria-describedby="emailHelp"
                           placeholder="Your last name">
                    </small>
                </div>
                <div class="form-group col-auto">
                    <label for="birth_date">Birth date</label>
                    <input name="birth_date" type="date" class="form-control" id="birth_date"
                           aria-describedby="emailHelp"
                           placeholder="Birthdate">
                    </small>
                </div>
                <div class="form-group col-auto">
                    <label for="degree" id="degree_label">Degree</label>
                    <input name="degree" type="text" class="form-control" id="degree"
                           aria-describedby="emailHelp"
                           placeholder="Field of study">
                    </small>
                </div>
                <div class="form-group col-auto ">
                    <label for="number">Phone number </label>
                    <input type="number" class="form-control" id="number" name="number"
                           placeholder="Phone number" required>
                </div>

                <div class="form-group col-auto ">
                    <label for="address">Current address </label>
                    <input type="text" class="form-control" id="address" name="address"
                           placeholder="Current address" required>
                </div>

                <fieldset class="form-group col-auto">
                    <h4 class="col-form-label col-auto">Gender:</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios111"
                               value="Male" checked>
                        <label class="form-check-label" for="gridRadios111">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios222"
                               value="Female">
                        <label class="form-check-label" for="gridRadios222">
                            Female
                        </label>
                    </div>
                </fieldset>

            </div>
            <div class="col-6 align-items-lg-end">

                <div class="form-group col-auto ">
                    <label for="exampleInputEmail1" id="exampleInputEmail1_label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" name="email"
                           placeholder="Enter email">

                </div>
                <div class="form-group col-auto ">
                    <label for="exampleInputPassword1">Password </label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Password" name="password">
                </div>
                <div class="form-group col-auto ">
                    <label for="confirm_password">Password Confirmation </label>
                    <input type="password" class="form-control" id="confirm_password"
                           placeholder="Password confirmation">
                </div>

                <div class="form-group col-auto ">
                    <label for="cin">Indian identification number </label>
                    <input type="text" class="form-control" id="cin" name="cin"
                           placeholder="Idetification number" required>
                </div>


                <div class="form-group col-auto">
                    <label class="myfuckinglabel" for="work" id="work">Current Occupation </label>
                    <select class="form-control" id="work" name="work">
                        <option value="Student">Student</option>
                        <option value="Business Person">Business Person</option>
                        <option value="Professionel">Professionel</option>
                        <option value="Salaried">Salaried</option>
                        <option value="Homeworker">Homeworker</option>

                    </select>
                </div>
                <div class="input-group col-auto">

                    <div class="custom-file">
                        <input id="image_file" type="file" name="image" class="custom-file-input"
                               aria-describedby="inputGroupFileAddon01" oninput="filesubmited()" required>
                        <label id="file-text" class="custom-file-label" for="image_file">Choose file</label>
                    </div>
                </div>
                <!--        ROLE   -->
                <fieldset class="form-group col-auto">
                    <h4 class="col-form-label col-auto">Account Type :</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Role" id="gridRadios1"
                               value="Admin" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Role" id="gridRadios2"
                               value="Super Admin">
                        <label class="form-check-label" for="gridRadios2">
                            Super Admin

                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Role" id="gridRadios3"
                               value="Startuper">
                        <label class="form-check-label" for="gridRadios3">
                            Startuper
                        </label>
                    </div>
                </fieldset>
                <!-- End of role selection -->

            </div>
            <div class="col-6 d-flex  centered-div">
                <a href="{{route('login')}}" class="col-5">
                    <button class="btn btn-secondary" type="button" style="margin-left: 5%; ">Already member ?</button>
                </a>
            </div>
            <div class="col-6 align-content-center centered-div">
                <button type="button" class="col-auto  btn btn-primary" onclick="registerDataIntegrity()">Submit
                </button>

            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{asset('js/input_control.js')}}"></script>


@endsection