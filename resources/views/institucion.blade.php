@extends('layouts.app')

@section('content')   
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de  Instituciones Registradas </div>
                	<div class="panel-body">
                		{{--Listado--}}
                		
						<ul class="list-group">
						   <li class="list-group-item">
						    <div class="row">
						      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><img class="round" avatar=""/> </div> 
						        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
						             <h4 class="list-group-item-heading"></h4>
						             <span>Publicado por: </span>	

						             <ul class="list-group">
								         @foreach($institucion as $institucion)
								    <li class="list-group-item">
								    <div class="row">
								          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
								              <h4 class="list-group-item-heading">{{ $institucion->name }}</h4>					
								          </div>

								    </div>

								 

									</li> 
									@endforeach

								</ul>{{--Fin de listado--}}				                     
						        </div>
						    </div>
							</li> 
						</ul>{{--Fin de listado--}}
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection