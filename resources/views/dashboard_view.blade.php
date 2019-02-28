@extends('main_app')
@section('content')
    <div class="row d-flex justify-content-start " style="margin-top: 2%; margin-bottom: 2%;"
         xmlns:v-on="http://www.w3.org/1999/xhtml">


        <div class="col-4">
            <div class="card shadow ">
                <div class="card-header "><h4>Applications over 6 months</h4></div>
                <div class="card-body">
                    <canvas id="barChart" style="max-width: 100%;"></canvas>
                </div>

            </div>
        </div>
        <div class="col-4">
            <div class="card shadow ">
                <div class="card-header card-title"><h4>Most offered help </h4></div>
                <div class="card-body">
                    <canvas id="myChart2"></canvas>
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

                    <button  type="button" class="btn  btn-blue-grey">More</button>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/vue@2.4.2"></script>

        <script src="{{ asset('js/dashboard.js') }}">


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