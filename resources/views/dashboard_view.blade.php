@extends('main_app')
@section('content')
    <div class="row d-flex justify-content-start " style="margin-top: 2%; margin-bottom: 2%;">

        <div class="col-11 " style="margin: 2% 5%;">
            <div class="card">
                <div class="card-header ">
                    <h3 class="card-title"> Attendancy today</h3>

                </div>
                <div class="card-body">
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
                <div class="card-footer d-md-flex justify-content-end">
                    <button type="button" class="btn  btn-blue-grey">More</button>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card shadow ">
                <div class="card-header card-title"><h4>Applications over 6 months</h4></div>
                <div class="card-body">
                    <canvas id="barChart" style="max-width: 100%;"></canvas>
                </div>

                <div class="card-footer d-md-flex justify-content-end">
                    <button type="button" class="btn  btn-blue-grey">More</button>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow ">
                <div class="card-header card-title"><h4>Most offered help </h4></div>
                <div class="card-body">
                    <canvas id="myChart2" style="max-width: 100%;"></canvas>
                </div>

                <div class="card-footer d-md-flex justify-content-end">
                    <button type="button" class="btn  btn-blue-grey">More</button>
                </div>
            </div>

        </div>

        <script>
            var ctx = document.getElementById("barChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["June", "July", "August", "October", "Nouvember", "December"],
                    datasets: [{
                        label: '# of Stratup Applications',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
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
            var ctx = document.getElementById("myChart2").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Technical Menthorship", "Workspace", "Laboratory", "Internet", "Funds"],
                    datasets: [{
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            '#44bd32',
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