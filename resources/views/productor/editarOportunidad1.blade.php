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
     {{-- Inicio FORM --}}
        <form method="POST" action="{{ url('productor/oportunidad/editar/'.$oportunidad->id) }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
              {{ method_field('PUT') }}
            <h2 class="text-center">Oportunidad Laboral</h2>
            {{-- Titulo--}}
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo :</label>
                <input class="form-control" type="text" name="titulo" id="text-input" value="{{ $oportunidad->titulo }}">
            </div>
            {{-- PROPUESTA --}}
            <div class="form-group">
                <label class="control-label" for="email-input">Propuesta: </label>
                <input class="form-control" type="text" name="propuesta" id="text-input" placeholder="Propongo ..." value="{{ $oportunidad->propuesta }}">
            </div>
            {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
               
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su oportunidad  laboral)</label>
                </div>
                 @foreach($oportunidad->keywords as $key)
                <div class="col-md-3">
                    <input name="palabra" type="text" class="form-control" required value="{{ $key->palabra }}"  disabled />
                </div>
                
                  @endforeach
            </div>
        </div>
            {{-- Requsitos --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Requisitos: </label>
                <textarea class="form-control" name="requisito" id="textarea-input"> {{ $oportunidad->requisito }}</textarea>
            </div>
        <div class="row">
            {{-- CATEGORIA --}}
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria: </label>
                        <select name="categoria"  class="form-control" required>
                                
                                  <option value="pasante" 
                                @if ($oportunidad->categoria == "pasante")
                                    selected
                                @endif
                                >Pasante</option>
                                <option value="encargado"
                                @if ($oportunidad->categoria == "encargado")
                                    selected
                                @endif
                                >Encargado</option>
                                <option value="estudiante"
                                @if ($oportunidad->categoria == "estudiante")
                                    selected
                                @endif
                                >Estudiante</option>
                         
                        </select>
                    </div>
                </div>
             {{-- RUBRO --}}
            <div class="col-md-6">   
                <div class="form-group">
                    <label class="control-label" for="textarea-input">Rubro: </label>
                        <select name="rubro"  class="form-control" required>  
                                 <option value="pyme"
                                    @if ($oportunidad->rubro == "pyme")
                                        selected
                                    @endif
                                    >PYME</option>
                                    <option value="beca"
                                    @if ($oportunidad->rubro == "beca")
                                        selected
                                    @endif
                                    >Beca</option>
                                    <option value="emprededores"
                                    @if ($oportunidad->rubro == "emprendedores")
                                        selected
                                    @endif
                                >Emprededores</option>
                        </select>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- DISPONIBILIDAD --}}
            {{-- 

                !!!TODO
                DISPONIBILIDAD POR DIA DE SEMANAS?



             --}}
             <div class="col-md-6"> 
                <div class="form-group">
                <label class="control-label">Franja Horaria: </label>
                <input class="form-control" type="text" name="disponibilidad" minlength="5" inputmode="full-width-latin" placeholder="00:00   a  00:00" value="{{ $oportunidad->disponibilidad }}">
                </div>
             </div>
            {{-- REMUNERACION --}}
             <div class="col-md-6">
                <div class="for-group">
                <label class="control-label">Remuneracion : </label>
                <input class="form-control" type="text"  name="remuneracion"  placeholder="$" value="{{ $oportunidad->remuneracion }}">
                </div>
            </div>
        </div>
            {{-- Fechas de ingreso y egreso --}}
        <div class="row">
            <div class="col-md-6"> 
                <div class="container">
                <label class="control-label" for="fechaIngreso">Fecha de Ingreso: </label>
                <input type="date" placeholder="DD" name="fechaIngreso"  / value="{{ $oportunidad->fechaIngreso }}">
             </div>
            </div>
            <div class="col-md-6"> 
                <div class="container">
                     <label class="control-label" for= "fechaEgreso">Fecha de Egreso: </label>
                     <input type="date" placeholder="DD" name="fechaEgreso"  / value="{{ $oportunidad->fechaEgreso }}">
                </div>   
            </div>
        </div>
            {{-- SUBMIT --}}
            <br>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar Cambios </button>
            <a  type="button" class="btn btn-primary col-md-offset-8 "  href="{{ url('productor/mostrarOportunidad') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
        </div>
            {{-- END FORM --}}
         </form>    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
