 

@extends('layouts.app')

@section('content')  

@if(session('status'))
      <div class="alert alert-danger text-uppercase text-center" role="alert">
          <strong>{{session('status')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
     </div>
@endif  

<br>
      {{--Titulo --}}
      <div class="container">
        <div class="panel panel-default">
              <div class="col-md-40  text-center"> <label class="control-label "><h3>Plataforma de comunicación entre Instituciones y Productores </h3></label>
              </div>
          </div> 
        </div>
{{-- Botones--}}
<div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="col-md-11 col-md-offset-1">
                        <a class="btn btn-primary active btn-lg" type="button"  href="{{ url('institucion/inicio') }}">
                          <h1>Instituciones </h2> Formadores  <i class="glyphicon glyphicon-arrow-right"></i> Capacidades 
                        </a>
                         <a class="btn btn-success  active btn-lg" type="button"  href="{{ url('institucion/inicio') }}">
                          <h1>Capacidades</h2>  Laborales
                        </a>
                        <a class="btn btn-info  active btn-lg" type="button"  href="{{ url('productor/inicio') }}">
                          <h1>Productores </h2>  Empleos  <i class="glyphicon glyphicon-arrow-right"></i>  Oportunidades
                        </a>
                        <a class="btn btn-danger  active btn-lg" type="button"  href="{{ url('productor/inicio') }}">
                          <h1>Oportunidades</h2>  Ofrecidas 
                        </a>
                </div>
            </div>
        </div>
    </div>
    <br>

 
    

{{-- Tabla de descripción--}}

{{--  <div class="form-group">
  <ol class=" carousel-indicators">
       <img src="{{asset('Imagen2.png')}}"  />
    </ol>
    <div class="row">

            <div class="container ">
                
              <div class="row transparent">
                    <div class="col-md-6 ">
                      <div class="tuyin first"> 
                        <span class="title"><h2>Oportunidades Laborales </h2></span>
                         <div class="plan-name">Productor</div>
                          <div class="text">
                            <p><li>Publicá tus oportunidades.</li>
                               <li>Buscá capacidades. </li> </p>
                         </div>                        
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="tuyin first"> 
                        <span class="title"><h2>Capacidades Laborales</h2></span>
                         <div class="plan-name">Institución</div>
                          <div class="text ">
                            <p> <li>Publicá tus capacidades.</li>
                                <li>Buscá oportunidades de trabajo.</li></p>
                          </div>
                      </div>
                    </div>
              </div>
             
            </div>
          
</div> </div>  --}}
 <div class="container">
 <div class="row">
 
<div  class="col-md-12 text-center "> <img  class="img-responsive" src="{{asset('cuadro.png')}}" /></div>
</div>
</div>
  

@endsection
