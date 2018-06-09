@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Postulaciones Laborales</h4></div>

                <div class="panel-body">
                     @if(session('success'))
                        <div class="alert alert-danger text-center" role="alert">

                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       </div>
                    @endif 



                            {{-- LISTA DE postulaciones flor --}}
                            <ul class="list-group">
                                
                            </ul>


                  


                 </div>
            </div>
        </div>
    </div>
</div>

@endsection