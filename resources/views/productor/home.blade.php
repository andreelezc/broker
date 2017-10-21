@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pequeño Productores</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


              <div class="container">
              <div class="col-lg-offset-2 col-md-1"><img src="{{asset('img/tractor.png')}}"  height="200"  />   </div>
              </div>

           
            
         
            
              <div class="col-lg-1 col-lg-offset-1 col-md-12">
              
                <a class="btn btn-success " role="button" href="{{ url('productor/perfil') }}">Perfil
                  </a>
               
             </div>

             
              <div class="col-lg-2 col-lg-offset-2 col-md-12">


                <a class="btn btn-primary" role="button" href="{{ url('productor/oportunidad') }}"> Oportunidades Laboral
                  </a>
             
                
                </div>
        
          
          <div class="col-lg-1 col-lg-offset-2 col-md-12">


                <a class="btn btn-warning" role="button" href="{{ url('productor/buscar') }}"> Buscar capacidades
                  </a>
             
                
                </div>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
