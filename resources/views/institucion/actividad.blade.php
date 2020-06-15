@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                <h4>Actividad de {{Auth::guard('institucion')->user()->name}}</h4>
                </div>

                <div class="panel-body text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <p><h1>{{Auth::guard('institucion')->user()->capacidades->count()}}</h1></p>
                            <p><h3>CAPACIDADES</h3></p>
                            
                        </div>
                        <div class="col-md-4">
                            <p><h1>{{Auth::guard('institucion')->user()->postulaciones->count()}}</h1></p>
                            <p><h3>POSTULACIONES</h3></p>
                        </div>
                        <div class="col-md-4">
                            <p><h1>{{Auth::guard('institucion')->user()->intereses->count()}}</h1></p>
                            <p><h3>OFERTAS</h3></p>
                        </div>
                    </div>
                    <h2>Capacidades por categoría</h2>
                    <canvas id="myChart" width="400" ></canvas>
                    <h2>Capacidades publicadas recientemente</h2>
                    <canvas id="tiempo" width="400" ></canvas>
        <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: @json($label),
                datasets: [{
                    label: 'Cantidad',
                    data: @json($grafico),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
              legend:{
                display:false
              },
              scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                        ,
                        gridLines:{
                          display:false
                        }
                    }],
                    yAxes:[
                      {
                        gridLines:{
                          display:false
                        }
                      }
                    ]
                }
            }
        });
        </script>
        <script>
            var ctx = document.getElementById('tiempo');
            var tiempo = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($label_time),
                    datasets: [{
                        label: 'Cantidad',
                        fill: false,
                        data: @json($grafico_time),
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        pointBorderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        pointBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 3
                    }]
                },
                options: {
                  legend:{
                    display:false
                  },
                  scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                            ,
                            gridLines:{
                              display:false
                            }
                        }],
                        yAxes:[
                          {
                            gridLines:{
                              display:false
                            },
                            ticks: {
                                stepSize: 1
                            }
                          }
                        ]
                    },
                }
            });
            </script>


                 </div>
            </div>
        </div>
    </div>
</div>
 

@endsection