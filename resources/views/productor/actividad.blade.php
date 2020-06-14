@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                <h4>Actividad de {{Auth::guard('productor')->user()->name}}</h4>
                </div>

                <div class="panel-body text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <p><h1>{{Auth::guard('productor')->user()->oportunidades->count()}}</h1></p>
                            <p><h3>OPORTUNIDADES</h3></p>
                            
                        </div>
                        <div class="col-md-4">
                            <p><h1>{{Auth::guard('productor')->user()->selecciones->count()}}</h1></p>
                            <p><h3>SELECCIONES</h3></p>
                        </div>
                        <div class="col-md-4">
                            <p><h1>{{Auth::guard('productor')->user()->postulaciones->count()}}</h1></p>
                            <p><h3>POSTULACIONES</h3></p>
                        </div>
                    </div>
                    <h2>Capacidades por categoria</h2>
                    <canvas id="myChart" width="400" ></canvas>
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
                        }
                      }
                    ]
                }
            }
        });
        </script>


                 </div>
            </div>
        </div>
    </div>
</div>
 

@endsection