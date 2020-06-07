 

@extends('layouts.app')

@section('content')  

@if(session('status'))
      <div class="alert alert-danger text-uppercase text-center" role="alert">
          <strong>{{session('status')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
     </div>
@endif  

<script>
  $(document).ready(function(){

    var ctx = $('#graficos');

          var myBarChart = new Chart(ctx, {
            type: 'bar',
          data:{
    datasets: [{
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        data: [10, 20, 30, 40, 50, 60, 70]
    }]
}
      });
  })
</script>

<br>
      {{--Titulo --}}
      <div class="container">
        <div class="panel panel-default">
              <div class="col-md-40  text-center"> <label class="control-label "><h3>Plataforma de comunicación entre Instituciones y Productores </h3></label>
              </div>
          </div> 
       
{{-- Botones--}}

        <div class="row">
          <div class="col-md-3"><a class="btn btn-block btn-primary  btn-lg" type="button"  href="{{ url('institucion/inicio') }}">
            <h1 class="numero_gigante text-center" style="font-size:70px"><strong>{{$Institucion}}</strong></h1>
            <h2 >Instituciones </h2>
          </a></div>
          <div class="col-md-3"><a class="btn btn-block btn-success   btn-lg" type="button"  href="{{ url('institucion/inicio') }}">
            <h1 class="numero_gigante text-center" style="font-size:70px"><strong>{{$Capacidad}}</strong></h1>
            <h2 >Capacidades</h2> 
          </a></div>
          <div class="col-md-3"><a class="btn btn-block btn-info   btn-lg" type="button"  href="{{ url('productor/inicio') }}">
            <h1 class="numero_gigante text-center" style="font-size:70px"><strong>{{$Productor}}</strong></h1>
            <h2 >Productores </h2>
          </a></div>
          <div class="col-md-3"><a class="btn btn-block btn-danger   btn-lg" type="button"  href="{{ url('productor/inicio') }}">
            <h1 class="numero_gigante text-center" style="font-size:70px"><strong>{{$Oportunidad}}</strong></h1>
            <h2 >Oportunidades</h2>  
          </a></div>
          
        </div>

  
    


 <div class="container">
    <div class="row">
    <div  class="col-md-12 text-center "> <img  class="img-responsive" src="{{asset('cuadro.png')}}" /></div>
    </div>
</div>

{{-- Graficos --}}

<div class="row">
 
  <div class="col-md-6 col-sm-12">
    <div class="panel" style="height: 400px">
      <div class="panel-heading text-center">
        <h2 >Capacidades sugeridas</h2>
       
      </div>
      <div class="panel-body">
        <ul>
          
          @foreach ($contador_capacidad as $key=>$item)
            @if($loop->iteration <= 10)
        <li><a href="{{route('buscar.key.productor',['palabra'=>$key,'page'=>0])}}"><strong>{{strtoupper($key)}}</strong></a>&nbsp;<span class="badge badge-secondary">{{$item}}</span></li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <div class="panel" style="height: 400px">
      <div class="panel-heading text-center">
        <h2 >Oportunidades más frecuentes</h2>
        
      </div>
      <div class="panel-body">
        
        <canvas id="myChart" width="400" ></canvas>
        <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: @json($label),
                datasets: [{
                    label: '#',
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
                scales: {
                    xAxes: [{
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
  </div>
  </div>
</div>
</div>
@endsection
