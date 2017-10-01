@extends('layouts.app')

@section('content')



<div class="container">
    <div class="container-fluid">
        <section id="botones">
            <div class="row">
                
                
                

            
                 <div class="col-md-3 col-md-offset-3"><a class="btn btn-success btn-block btn-lg" role="button" href="{{ route('productor') }}"}>Productor </a></div> 
                <div class="col-md-3 col-md-offset-0"><a class="btn btn-primary btn-block btn-lg" role="button" href="{{ route('emprendedor') }}">Emprendedor </a></div> 
                            
                      
                           
                        
            </div>
        </section>
        <section></section>
    </div>
    </div>
</div>
@endsection
