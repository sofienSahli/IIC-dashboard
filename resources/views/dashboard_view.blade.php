@extends('main_app')
@section('content')
    <div class="row d-flex justify-content-center " style="margin-top: 2%; margin-bottom: 2%;"
         xmlns:v-on="http://www.w3.org/1999/xhtml">


        <div class="col-sm-6 mb-3 mb-md-0 ">

            <div class="card text-white bg-info " style="max-width: 20rem;">
                <div class="card-header">Applications</div>
                <div class="card-body">
                    <h5 class="card-title"> {{ $number_of_presentation_submited + $number_of_presentation_missing}} new
                        Startups idea</h5>
                    <p class="card-text text-white">
                        {{ $number_of_presentation_submited }} Submited Preselection PPT
                        <br>
                        {{ $number_of_presentation_missing }} Submited Preselection PPT
                    </p>
                    <a href="{{ route('user_management') }}" class="btn btn-yellow">Users management</a>
                </div>
            </div>
        </div>
        <div class="col-4 col-sm-12 col-lg-4 col-md-6">
            <div class="card shadow ">
                <div class="card-header">Innovations by fields</div>
                <div class="card-body">
                    <canvas id="barChart" style="width: 100%; height: 100%; "></canvas>
                </div>

            </div>
        </div>
        <div class="col-4 col-sm-12 col-lg-4 col-md-6">
            <div class="card shadow ">
                <div class="card-header">Most offered help</div>
                <div class="card-body">
                    <canvas id="myChart2" style="width: 100%; height: 100%;"></canvas>
                </div>

            </div>

        </div>
        <div class="col-11 " style="margin: 2% 5%; display: none;">
            <div class="card">
                <div class="card-header ">
                    <h3 class="card-title"> Attendancy today</h3>

                </div>
                <div class="card-body ">
                    <table id="table" class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Person</th>
                            <th scope="col">Login time</th>
                            <th scope="col">Exit time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Farhad hached</td>
                            <td>07:00</td>
                            <td>20:00</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob fils de yaakoub</td>
                            <td>07:00</td>
                            <td>20:00</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Teddy born in july</td>
                            <td>07:00</td>
                            <td>20:00</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Frank the belgium scrub</td>
                            <td>07:00</td>
                            <td>20:00</td>

                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-md-flex justify-content-end" id="mutton">

                    <button type="button" class="btn  btn-blue-grey">More</button>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/vue@2.4.2">
        </script>

        <script>
            var ctx = document.getElementById("barChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Product", "Process", "Services"],
                    datasets: [{
                        label: '# of Stratup Applications',
                        data: [5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
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
        <script>

            var ctx = document.getElementById("myChart2").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Technical Menthorship", "Workspace", "Laboratory", "Internet", "Funds"],
                    datasets: [{
                        data: [{{  $mento_need}} , 0, {{$lab_need}}, {{$internet_need}}, 0],
                        backgroundColor: [
                            '#4CAF50',
                            '#e1b12c',
                            '#8c7ae6',
                            '#e84118',
                            '#192a56',
                            '#2f3640'
                        ],
                        borderColor: [
                            '#4cd137',
                            '#fbc531',
                            '#9c88ff',
                            '#c23616',
                            '#192a56',
                            '#718093'
                        ],
                        borderWidth: 1
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
    </div>
    </div>
@endsection