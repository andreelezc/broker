@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar Oportunidades Laborales</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif


<div class="form-group">
    <label for="search-input" class="control-label">Buscar</label>
    <div class="input-group">
        <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
        <input type="search" name="search-input" class="form-control" id="search-input" />
    </div>
</div>
 
<ul class="list-group">
    @foreach($oportunidades as $oportunidad)
   <li class="list-group-item">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><img class="round" avatar="{{$oportunidad->productor->name}}"/>


      </div> 
        <div class="col-md-10 col-sm-10 col-xs-8">
             <h4 class="list-group-item-heading">{{ $oportunidad->titulo }}</h4>
             <span>                  
                Publicado por: {{$oportunidad->productor->name}}
                </span>
                     <p>
               @foreach($oportunidad->keywords() as $key)
                    <a href="#"><span class="badge">$key</span></a><br>
               @endforeach
                </p>
        </div>
    </div>
</li>
    @endforeach
</ul>



                 </div>
            </div>
        </div>
    </div>
</div>
 <script src="{{ asset('js/avatar.js') }} "></script>
@endsection