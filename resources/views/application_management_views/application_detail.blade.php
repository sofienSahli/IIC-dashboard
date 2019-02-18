@extends('main_app')
@section('content')
    <div class="card" style="margin: 5%;">
        <div class="card-header ">


            <h5 class="card-title">{{ $app->user->name ." ".$app->user->last_name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $app->user->email }}</h6>
        </div>
        <div class="card-body">
            <div class="card-columns">
                <div>
                    <h5> Application Pan number</h5>
                    <p> {{$app->pan_number}} </p>
                </div>
                <div>
                    <h5> Application Compagny phone number</h5>
                    <p> {{$app->compagny_number}} </p>
                </div>
                <div>
                    <h5> Innovation Field </h5>
                    <p> {{$app->innovation_field}} </p>
                </div>
                <div>
                    <h5> Innovation Description </h5>
                    <p> {{$app->innovation_description}} </p>
                </div>
                <div>
                    <h5> Technological innovation </h5>
                    <p> {{$app->tech_innovation}} </p>
                </div>
                <div>
                    <h5> Sector of work</h5>
                    <p> {{$app->innovation_sector}} </p>
                </div>


                <div>
                    <h5> Estimated project cost in INR </h5>
                    <p> {{$app->estimated_cost}} </p>
                </div>
                <div>
                    <h5> Already invested funds in INR </h5>
                    <p> {{$app->invested_funds}} </p>
                </div>
                <div>
                    <h5> Product expenditure </h5>
                    <p> {{$app->expediture_sales}} </p>
                </div>

                <div>
                    <h5> Applicant expectancy </h5>
                    <p> {{$app->user_expectation}} </p>
                </div>

                <div>
                    <h5> Applicant Inspiration </h5>
                    <p> {{$app->inspiration }} </p>
                </div>

                <div>
                    <h5> Application presentation </h5>
                    <form action="{{ route('download-presentation') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $app->id }}">
                        <button class="btn btn-deep-purple" type="submit"><i class="fas fa-file-download"></i> Download
                        </button>
                    </form>
                </div>

                @if($user->role == "Super Admin")

                    <div class="img-thumbnailp">
                        <canvas id="barChart"></canvas>
                    </div>
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

                @endif

            </div>
        </div>
        <div class="card-footer d-inline-flex justify-content-end">
            @if(count($vote) == 0)

                <form method="post" action="{{ route('vote-up') }}">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="number2">
                    <input type="hidden" value="{{ $app->id }}" name="number1">
                    <button class="btn-green btn "><i class="far fa-thumbs-up"></i> Vote up</button>
                </form>

                <form method="post" action="{{ route('vote-down') }}">
                    @csrf
                    <input type="hidden" value="{{ $user->id }}" name="number2">
                    <input type="hidden" value="{{ $app->id }}" name="number1">
                    <button class="btn-red btn "><i class="far fa-thumbs-down"></i> Vote down</button>
                </form>
            @else
                @if($vote[0]->isAccepted)
                    <button class="btn-green btn " disabled><i class="far fa-thumbs-up"></i>You Voted up</button>

                @else
                    <button class="btn-red btn " disabled><i class="far fa-thumbs-down"></i> You Voted down</button>

                @endif
            @endif
        </div>

    </div>


@endsection