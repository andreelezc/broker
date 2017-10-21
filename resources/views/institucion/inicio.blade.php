@extends('layouts.app')

@section('content')


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INET-Web</title>
    
  
    
</head>

<body>
 <div class="panel panel-default">
    <h1 class= "text-center"> Institución Educativa </h1>
</div>
    <div class="container ">

        
        <div class="row ">
            <!--<div class="col-lg-1 col-lg-offset-3 col-md-12"><span class="label label-success  ">  Ingresar </span></div>
            <div class="col-lg-3 col-lg-offset-2 col-md-12 col-md-offset-4"><span class="label label-warning">Crear cuenta</span></div>-->

            <section></section>
        </div>
        <div class="row "> 

             <div class="col-lg-3 col-lg-offset-3 col-md-12">
                 <div class="col-lg-1 col-lg-offset-3 col-md-12"><span class="label label-success  ">  Ingresar </span></div>
                <a class="btn " role="button" href="{{ url('institucion/acceso') }}">
                <img  src="{{asset('img/acceder.png')}}" height="200" class="img-circle"/> 
             </div>

              <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-4 col-sm-5 col-sm-offset-4 col-xs-3 col-xs-offset-3"> 
                <div class="col-lg-3 col-lg-offset-2 col-md-12 col-md-offset-4"><span class="label label-primary">Crear cuenta</span></div>
                <a class="btn " role="button" href="{{ url('institucion/registro') }}">
                <img src="{{asset('img/im5.png')}}"  height="200" class="img-circle"/>
             </div>

        
        </div>
    </div>
</body>


@endsection