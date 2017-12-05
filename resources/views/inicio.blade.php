 

@extends('layouts.app')

@section('content')     

{{-- Botones--}}
   <div class="container ">
<div class="col-md-10 col-md-offset-1">
           
                <div class="col-md-3">
                    <div class="row">
                        <a class="btn btn-lg btn-primary btn-block btn-responsive">
                            <h1>20</h2>
                                Instituciones Registradas
                        </a>
                    </div>
                </div>
              
               <div class="col-md-3">
                    <div class="row">
                        <a class="btn btn-lg btn-info btn-block">
                            <h1>40</h1> 
                            Productores Activos
                        </a>
                    </div>
                </div>
              
                <div class="col-md-3">
                    <div class="row">
                        <a class="btn btn-lg btn-danger btn-block">
                            <h1>+100</h1>
                            Oportunidades Laborales 
                        </a>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="row">
                        <a class="btn btn-lg btn-success btn-block">
                            <h1>30</h1>
                            Capacidades
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
    
    {{-- Barra de Busquedas--}}
     <div class="col-md-6">
        <form class="bootstrap-form-with-validation">
            <div class="form-group">
                <div class="panel panel-default">
                <div class="panel-heading">Buscar Capacidades </div>
                
                <div class="input-group">
                    
                    <input type="search" name="search-input" class="form-control" id="search-input" />
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
                    
                    <input type="search" name="search-input" class="form-control" id="search-input" />
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



   

@endsection
