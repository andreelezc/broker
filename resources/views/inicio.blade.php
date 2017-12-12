 

@extends('layouts.app')

@section('content')  

@if(session('status'))
      <div class="alert alert-danger text-uppercase text-center" role="alert">
          <strong>{{session('status')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
     </div>
@endif  
{{-- Barra de Busquedas--}}
    {{-- <div class="col-md-6">
        <form class="bootstrap-form-with-validation">
            <div class="form-group">
                <div class="panel panel-default">
                <div class="panel-heading">Buscar Capacidades </div>
                
                <div class="input-group">
                    
                    <input type="search" name="search-input" class="form-control" id="search-input" placeholder="Ingresa tu busqueda de capacidad + enter"/>
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                </div>
         
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
             </div>
             </div>

        </form>
    </div>
    <div class="col-md-6">
        <form class="bootstrap-form-with-validation">
            <div class="form-group">
                <div class="panel panel-default">
                <div class="panel-heading">Buscar Oportunidades Laborales</div>
                
                <div class="input-group">
                    
                    <input type="search" name="search-input" class="form-control" id="search-input" placeholder="Ingresa tu busqueda de oportunidad + enter"/>
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                </div>
         
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
            <div class="form-group"></div>
             </div>
             </div>

        </form>
    </div>--}}
<br>

{{-- Botones--}}
<div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="col-md-11 col-md-offset-2">
                        <a class="btn btn-primary active btn-lg" type="button"  href="{{ url('institucion') }}">
                          <h1>20</h2> Instituciones Registradas 
                        </a>
                         <a class="btn btn-success  active btn-lg" type="button"  href="{{ url('capacidad') }}">
                          <h1>30</h2> Capacidades Laborales
                        </a>
                        <a class="btn btn-info  active btn-lg" type="button"  href="{{ url('productor') }}">
                          <h1>40</h2> Productores Activos
                        </a>
                        <a class="btn btn-danger  active btn-lg" type="button"  href="{{ url('oportunidad') }}">
                          <h1>+100</h2> Oportunidades Ofrecidas 
                        </a>
                </div>
            </div>
        </div>
    </div>


 
        <br>
   
{{-- Tabla de descripción--}}
<div class="form-group">
    <div class="row">

            <div class="container ">
                 <div class="panel panel-default">
                
                    <div class="col-md-15   text-center"> <label class="control-label "><h3>Comunicación entre Instituciones y Productores </h3></label>
                    </div> </div> 

                   <div  class="col-md-15 text-center"> <img  src="{{asset('info1.png')}}" /></div>
                    
              <div class="row transparent">
                    <div class="col-md-6 ">
                      <div class="tuyin first"> 
                        <span class="title"><h2>Oportunidades Laborales </h2></span>
                         <div class="plan-name">Productor</div>
                          <div class="text">
                            <p><li>Publicá tus oportunidades</li>
                               <li>Buscá capacidades </li> </p>
                          </div>
                        {{--  <button type="button" class="btn btn-default">Ver <span class="glyphicon glyphicon-plus"></span> </button>--}}
                      </div>

                    </div>
                    
                    

                    <div class="col-md-6">

                      <div class="tuyin first"> 
                        <span class="title"><h2>Capacidades Laborales</h2></span>
                         <div class="plan-name">Institución</div>
                          <div class="text ">
                            <p> <li>Publicá tus capacidades: Pasantias, Trabajos finales, o Tabajo de campo...</li>
                                <li>Buscá oportunidades de trabajo</li></p>
                          </div>
                       {{--  <button type="button" class="btn btn-default">Ver <span class="glyphicon glyphicon-plus"></span> </button>--}}
                      </div>
                    </div>
              </div>
              
            </div>
            <div  class="col-md-15 text-center"> <img  src="{{asset('info2.png')}}" /></div>
</div>

</div>
    
{{--<div  class="col-md-15 text-center"> <img  src="{{asset('comunicacion.jpg')}}" /></div>--}}
   <br>

@endsection
