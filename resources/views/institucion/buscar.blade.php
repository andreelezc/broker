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
 



<div class="form-group">
    <a href="#Ventana1" for="textarea-input" class="control-label" data-toggle="modal">Titulo </a>

<div id= "Ventana1" class="modal fade in " tabindex="-1" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Titulo</h4></div>
            <div class="modal-body">
                <p>Datos de las oportunidades cargadas </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
       
    </div>
</div>
    <textarea name="textarea-input" placeholder= ""class="form-control" id="textarea-input"></textarea>
</div>



<div class="form-group">
    <a href="#Ventana1" for="textarea-input" class="control-label" data-toggle="modal">Titulo </a>

<div id= "Ventana1" class="modal fade in " tabindex="-1" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Titulo</h4></div>
            <div class="modal-body">
                <p>Datos de las oportunidades cargadas </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
       
    </div>
</div>
    <textarea name="textarea-input" class="form-control" id="textarea-input"></textarea>
</div>



<div class="form-group">
    <a href="#Ventana1" for="textarea-input" class="control-label" data-toggle="modal">Titulo </a>

<div id= "Ventana1" class="modal fade in " tabindex="-1" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Titulo</h4></div>
            <div class="modal-body">
                <p>Datos de las oportunidades cargadas </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
       
    </div>
</div>
    <textarea name="textarea-input" class="form-control" id="textarea-input"></textarea>
</div>



<div class="form-group">
    <a href="#Ventana1" for="textarea-input" class="control-label" data-toggle="modal">Titulo </a>

<div id= "Ventana1" class="modal fade in " tabindex="-1" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Titulo</h4></div>
            <div class="modal-body">
                <p>Datos de las oportunidades cargadas </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
       
    </div>
</div>
    <textarea name="textarea-input" class="form-control" id="textarea-input"></textarea>
</div>

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection