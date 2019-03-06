@extends('startuper_interns_app_body')
@section('content')

    <div class="container-fluid row">
        <div class="col-12 d-inline-flex justify-content-center" style="padding-top: 5%;">
            <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header">Deadline</div>
                <div class="card-body">
                    <h5 class="card-title"> {{ $deadline->deadline_date }}</h5>
                    <p class="card-text text-white">Please note that any presentation submitted after the given deadline
                        will
                        automatically be rejected</p>
                </div>
            </div>

            <div class="img-thumbnailp col-auto" style="margin-left: 2%">
                <div class="card text-black-50 bg-transparent mb-3" style="max-width: 20rem;">
                    <div class="card-header">On going vote</div>
                    <div class="card-body">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-6 d-flex justify-content-center align-items-center">
            <img src="{{asset('images/logo.png')}}" class="img-fluid" width="75px;" style="padding: 1%; margin: 1%;">
            <p>
                <strong> Farhad Hachad :</strong>
                last sumbmited post will go here and that's will be displayed for future use
            </p>
        </div>


        <div class="col-lg-6 col-12" style="margin-top: 3%;">
            <form action="{{ route('uppresentation') }}" enctype="multipart/form-data" method="post">

                <div class="card ">
                    @if($application->isPresentationSubmited == false )
                        @csrf
                        <input name="id" type="hidden" value="{{ $application->id }}">
                        <div class="card-body">
                            <label> You are now free to upload your presentation </label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_file"
                                           aria-describedby="inputGroupFileAddon01" name="file"
                                           oninput="filesubmited()">
                                    <label class="custom-file-label" id="file-text" for="image_file">Select your .pptx
                                        presentation
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-inline-flex justify-content-center">

                            <a href="{{ route('downloadTemplate')}}">
                                <button class="btn btn-secondary" type="button"> Download template</button>
                            </a>

                            <input type="submit" value="Upload" class="btn btn-primary">

                        </div>

                    @endif
                </div>
            </form>

        </div>
    </div>
    <script src="{{ asset('js/Chart.js') }}"></script>
    <script>
        var ctx = document.getElementById("barChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Yes", "No"],
                datasets: [{
                    label: 'Votes for this Application',
                    data: [{{ $positive_votes }},{{ $negative_votes }}],
                    backgroundColor: [
                        '#4CAF50',
                        '#F44336'
                    ],
                    borderColor: [
                        '#009688',
                        '#E91E63'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="{{ asset('js/input_control.js') }}"></script>
@endsection