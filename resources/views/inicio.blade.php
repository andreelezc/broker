 

@extends('layouts.app')

@section('content')     




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
    
     <div class="col-md-6">
        <form class="bootstrap-form-with-validation">
            <div class="form-group">
                <div class="panel panel-default">
                <div class="panel-heading">Buscar Capacidades </div>
                
                <div class="input-group">
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                    <input type="search" name="search-input" class="form-control" id="search-input" />
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
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                    <input type="search" name="search-input" class="form-control" id="search-input" />
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
