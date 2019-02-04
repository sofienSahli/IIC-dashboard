@extends('main_app')
@section('content')
    @if(!empty($user))
        <div class="col-12" style="margin-top: 4%; margin-bottom: 4%;">

            <div class="card">
                <div class="card-header d-md-inline-flex align-items-center">
                    <img src="{{ asset($user->profile_picture ) }} " width="200" height="200">
                    <div style="margin-left: 10%;">
                        <h4> {{ $user->last_name . "  ".$user->name }}</h4>
                        <h5 style="opacity: 0.7;"> {{ $user->degree }}</h5>


                    </div>
                </div>
                <div class="col-12 card-body d-md-inline-flex align-items-center">
                    <div class="col-6">


                        <div class="form-group col-auto">
                            <label for="birth_date">Birth date</label>
                            <input name="birth_date" type="date" class="form-control" id="birth_date"
                                   aria-describedby="emailHelp" disabled
                                   placeholder="Birthdate" value="{{ $user->birth_date }}">
                        </div>
                        <div class="form-group col-auto">
                            <label for="degree" id="degree_label">Work</label>
                            <input name="degree" type="text" class="form-control" id="degree"
                                   aria-describedby="emailHelp"
                                   placeholder="Field of study" value="{{$user->work }}" disabled>
                        </div>
                        <div class="form-group col-auto">
                            <label for="number">Phone number </label>
                            <input type="number" class="form-control" id="number" name="number"
                                   placeholder="Phone number" disabled value="{{$user->phone_number }}">
                        </div>

                        <div class="form-group col-auto ">
                            <label for="address">Current address </label>
                            <input type="text" class="form-control" id="address" name="address"
                                   placeholder="Current address" value="{{$user->address}}" disabled>
                        </div>

                    </div>
                    <!-- Second column start -->

                    <div class="col-6 align-items-lg-end">

                        <div class="form-group col-auto ">
                            <label for="gender">Gender </label>
                            <input type="text" class="form-control" id="gender" name="gender"
                                   placeholder="Current address" disabled value="{{ $user->gender }}">
                        </div>


                        <div class="form-group col-auto ">
                            <label for="exampleInputEmail1" id="exampleInputEmail1_label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" name="email"
                                   placeholder="Enter email" disabled value="{{$user->email}}">

                        </div>
                        <div class="form-group col-auto ">
                            <label for="cin">Indian identification number </label>
                            <input type="text" class="form-control" id="cin" name="cin"
                                   value="{{ $user->cin }}" disabled>
                        </div>

                        <div class="form-group col-auto ">
                            <label for="created_at">Account creatation date </label>
                            <input type="text" class="form-control" id="created_at" name="created_at"
                                   value="{{$user->created_at}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex d-inline align-items-end">
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
                </div>
            </div>
        </div>
        @if($user->role == 'Startuper')

            <div class="card">

                <div class="card-header d-flex d-md-inline-flex  justify-content-center">
                    @if(!$user->application->isPresentationSubmited)
                        <div class="d-inline-flex align-items-center">
                            <i class="far fa-check-circle green-text fa-3x" style="margin: 1%;"></i>

                            <strong class="card-title">Presentation Submited</strong>
                        </div>

                    @else
                        <div class="d-inline-flex align-items-center">
                            <i class="fas fa-exclamation-triangle yellow-text fa-3x " style="margin-left: 2%;"> </i>

                            <strong class="card-title">Presentation Missing</strong>
                        </div>
                    @endif

                </div>
                <div class="card-body">

                    <div class="col-12">

                        <div class=" d-flex justify-content-center">
                            <div style="margin-right: 20px; " class="col-6">
                                <div class="form-group">
                                    <label class="myfuckinglabel" for="pan_number">Pan number:</label>
                                    <input placeholder="Pan number" name="pan_number" type="text"
                                           class="form-control" value="{{$user->application->pan_number }}"
                                           id="pan_number" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="myfuckinglabel" for="compagny_number">Compagny number if
                                        exist</label>
                                    <input value="{{ $user->application->compagny_number }}" name="compagny_number"
                                           type="text"
                                           class="form-control"
                                           id="compagny_number" disabled>
                                </div>


                                <div class="form-group">
                                    <label class="myfuckinglabel" for="compagny_number" id="inovation">Innovation
                                        field</label>
                                    <input value="{{ $user->application->innovation_field }}" name="compagny_number"
                                           type="text"
                                           class="form-control"
                                           id="compagny_number" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="myfuckinglabel" for="innovation_description">Brief description
                                        about the
                                        field</label>
                                    <input value="{{ $user->application->innovation_description }}"
                                           name="innovation_description"
                                           type="text"
                                           class="form-control"
                                           id="innovation_description" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="myfuckinglabel" for="innovation_sector">Field/Sector of innovation
                                        project </label>
                                    <input value="{{ $user->application->innovation_sector }}" name="innovation_sector"
                                           type="text"
                                           class="form-control"
                                           id="innovation_sector" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="myfuckinglabel" for="startup_description"
                                           style="margin-bottom: 15px;">Give brief
                                        details/description of start
                                        ups/innovation project/state key innovative features </label>
                                    <input value="{{ $user->application->startup_description }}"
                                           name="startup_description" type="text"
                                           class="form-control"
                                           id="startup_description" disabled>
                                </div>
                                <!--        is started   -->


                                <div class="form-group">
                                    <label class="myfuckinglabel" for="startup_description"
                                           style="margin-bottom: 15px;"> Is this startup currently working ? </label>
                                    <input value="{{ $user->application->isStarted ? "yes":"no"  }}"
                                           name="startup_description" type="text"
                                           class="form-control"
                                           id="startup_description" disabled>
                                </div>

                            </div>
                            <div style="margin-left: 20px;" class="col-6">
                                <div class="form-group">
                                    <label class="myfuckinglabel" for="estimated_cost">Estimated project
                                        cost </label>
                                    <input value="{{ $user->application->estimated_cost }}" name="estimated_cost"
                                           type="text"
                                           class="form-control"
                                           id="estimated_cost" disabled>
                                </div>


                                <div class="form-group">
                                    <label class="myfuckinglabel" for="invested">Invested fund so far </label>
                                    <input value="{{  $user->application->invested_funds }}" name="invested" type="text"
                                           class="form-control"
                                           id="invested" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="myfuckinglabel" for="exp_product">Expediture for product </label>
                                    <input placeholder="{{ $user->application->expediture_product }}" name="exp_product"
                                           type="text"
                                           disabled
                                           class="form-control"
                                           id="exp_product">
                                </div>

                                <div class="form-group">
                                    <label class="myfuckinglabel" for="exp_sales">Expediture for sales </label>
                                    <input value="{{  $user->application->expediture_sales  }}" name="exp_sales"
                                           type="text"
                                           class="form-control"
                                           id="exp_sales"
                                           disabled
                                    >
                                </div>
                                <div class="form-group">
                                    <label class="myfuckinglabel" for="expectation">What are you expecting from
                                        IIC </label>
                                    <input value="{{  $user->application->user_expectation }}" name="expectation"
                                           type="text"
                                           class="form-control"
                                           id="expectation"
                                           disabled
                                    >
                                    <div class="form-group">
                                        <label class="myfuckinglabel" for="isnpiration">What inspire you </label>
                                        <input value="{{ $user->application->inspiration }}" name="isnpiration"
                                               type="text"
                                               class="form-control"
                                               id="isnpiration"
                                               disabled
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label class="myfuckinglabel" for="tech_innov">What technologie innovation
                                            your porject has
                                            to offer </label>
                                        <input value="{{ $user->application->tech_innovation }}" name="tech_innov"
                                               type="text"
                                               class="form-control"
                                               id="tech_innov"
                                               disabled
                                        >
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>
            </div>
        @endif

    @else
        <script> window.location = "/user_management"; </script>
    @endif

@endsection