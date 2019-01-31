@extends('main_app')
@section('content')
    <div class="row">

        <div class="card col-12" STYLE="margin-top: 2%;">
            <form class="">

                <div class="card-header ">

                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-search"></i> Search tools
                    </a>
                </div>

                <div class="collapse" id="collapseExample">
                    <div class="card-body d-flex justify-content-between d-md-flex">
                        <div class="">
                            <div class="form-group">
                                <label class="myfuckinglabel" for="usr">Applicant name:</label>
                                <input placeholder="Applicant's name" name="name" type="text" class="form-control"
                                       id="usr">
                            </div>
                            <div class="form-group">
                                <label class="myfuckinglabel" for="cin">Applicant CIN:</label>
                                <input placeholder="Applicant's id" name="cin" type="text" class="form-control"
                                       id="cin">

                            </div>
                        </div>

                        <!--        ROLE   -->
                        <fieldset class="form-group col-auto ">
                            <h4 class="col-form-label col-auto">Application status :</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                       value="review" checked>
                                <label class="form-check-label myfuckinglabel" for="gridRadios1">
                                    Under content review
                                </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                       value="accepted">
                                <label class="form-check-label myfuckinglabel" for="gridRadios2">
                                    Accepted
                                </label>
                            </div>

                        </fieldset>

                        <!--  End of choice-->

                        <div>

                            <div class="form-group col-auto">
                                <label for="min_date" class="myfuckinglabel">Starting search date:</label>
                                <input name="min_date" type="date" class="form-control" id="min_date">
                            </div>

                            <div class="form-group col-auto">
                                <label for="max_date" class="myfuckinglabel">End search date:</label>
                                <input name="max_date" type="date" class="form-control" id="max_date">
                            </div>

                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <input type="submit" value="Search" class="btn-primary btn">
                    </div>
                </div>
            </form>

        </div>

    </div>
    <div class="col-12" style="margin-top: 5%;">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Applicant's name</th>
                <th scope="col"> Work</th>
                <th scope="col">Field of study</th>
                <th scope="col">Applicant phone number</th>
                <th scope="col"> Startup is working</th>
                <th scope="col"> Application's status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($applications as $app)

                <tr>
                    <td><a href="/">{{ $app->user->name. " ".$app->user->last_name  }} </a></td>
                    <td> {{ $app->user->work }}</td>
                    <td>{{$app->user->degree  }}</td>
                    <td> {{ $app->user->phone_number }} </td>
                    @if($app->isStarted)
                        <td> Started working</td>
                    @else
                        <td> Not yet working</td>
                    @endif
                    <td>
                        <button class="btn btn-danger">Reject</button>
                        <button class="btn btn-primary">Accept</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    </div>
@endsection