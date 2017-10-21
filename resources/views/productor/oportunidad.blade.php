@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a Oportunidades Laborales </div>



                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                       
                        </div>
                    @endif               

    
        <form method="POST" action="{{ url('productor/oportunidad') }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
            <h2 class="text-center">Oportunidad Laboral</h2>
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo :</label>
                <input class="form-control" type="text" name="titulo" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input">Necesidad: </label>
                <input class="form-control" type="text" name="necesidad" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input">Propuesta: </label>
                <input class="form-control" type="text" name="propuesta" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="textarea-input">Requisitos: </label>
                <textarea class="form-control" name="requisito" id="textarea-input"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" name= "categoria" for="file-input">Categoria</label>
            </div>
           <div class="form-group has-success"><span><label class="control-label checkbox-inline"><input  name= "categoria" type="checkbox">Pasante   </label><p></p></span><span><label class="control-label checkbox-inline"><input  name= "categoria" type="checkbox">Encargado   </label></span><p></p><span><label class="control-label checkbox-inline"><input   name= "categoria" type="checkbox"> Proyecto   </label></span><p></p><span><label class="control-label checkbox-inline"><input  name= "categoria" type="checkbox">Estudiante   </label></span></div>
            <div
            class="form-group">
                <label class="control-label" name= "rubro">Rubro  </label>
    </div>
    <div class="form-group">
        <div class="radio">
            <label class="control-label">
                <input type="radio"> PYME</label>
        </div>
        <div class="radio">
            <label class="control-label">
                <input type="radio" name="rubro" checked="">Beca</label>
        </div>
        <div class="radio">
            <label class="control-label">
                <input type="radio" name="rubro">Emprendedores</label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for ="disponibilidad">Disponibilidad Horaria requerida: </label>
        <input class="form-control input-sm" name ="disponibilidad" type="text" minlength="5" inputmode="full-width-latin">
    </div>
    <div class="form-group">
        <label class="control-label" for="remuneracion">Remuneracion: </label>
        <input class="form-control"  name="remuneracion"  type="text" placeholder="$$">
    </div>



    <div class="container">
        <label class="control-label" for="fechaIngreso">Fecha de Ingreso: </label>
    
        <input type="date" placeholder="DD" name="fechaIngreso"  />
  
  
       
    </div>

    <br>
    <div class="container">
        <label class="control-label" for= "fechaEgreso">Fecha de Egreso: </label>
    
         <input type="date" placeholder="DD" name="fechaEgreso"  />

   
    </div>
     <br>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Cargar </button>
    </div>
    </form>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
           
               

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
