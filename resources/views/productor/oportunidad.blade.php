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
        <form method="POST" action="{{ url('productor/oportunidad') }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
            <h2 class="text-center">Oportunidad Laboral</h2>
            {{-- Titulo--}}
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo :</label>
                <input class="form-control" type="text" name="titulo" id="text-input">
            </div>
            {{-- PROPUESTA --}}
            <div class="form-group">
                <label class="control-label" for="email-input">Propuesta: </label>
                <input class="form-control" type="text" name="propuesta" id="text-input" placeholder="Propongo ...">
            </div>
            {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su oportunidad  laboral)</label>
                </div>
                <div class="col-md-3">
                    <input name="key1" type="text" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <input name="key2" type="text" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <input name="key3" type="text" class="form-control" required />
                </div>
                <div class="col-md-3">
                    <input name="key4" type="text" class="form-control" required/>
                </div>
            </div>
        </div>  
            {{-- Requsitos --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Requisitos: </label>
                <textarea class="form-control" name="requisito" id="textarea-input"></textarea>
            </div>
        <div class="row">
            {{-- CATEGORIA --}}
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria: </label>
                        <select name="categoria"  class="form-control" required>
                                
                                <option value="pasante">Pasante</option>
                                <option value="encargado">Encargado</option>
                                <option value="estudiante">Estudiante</option>
                         
                        </select>
                    </div>
                </div>
             {{-- RUBRO --}}
            <div class="col-md-6">   
                <div class="form-group">
                    <label class="control-label" for="textarea-input">Rubro: </label>
                        <select name="rubro"  class="form-control" required>  
                                <option value="pyme">PYME</option>
                                <option value="beca">Beca</option>
                                <option value="emprededores">Emprededores</option>
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
                <input class="form-control" type="text" name="disponibilidad" minlength="5" inputmode="full-width-latin" placeholder="00:00   a  00:00">
                </div>
             </div>
            {{-- REMUNERACION --}}
             <div class="col-md-6">
                <div class="for-group">
                <label class="control-label">Remuneracion : </label>
                <input class="form-control" type="text"  name="remuneracion"  placeholder="$" required>
                </div>
            </div>
        </div>
            {{-- Fechas de ingreso y egreso --}}
        <div class="row">
            <div class="col-md-6"> 
                <div class="container">
                <label class="control-label" for="fechaIngreso">Fecha de Ingreso: </label>
                <input type="date" placeholder="DD" name="fechaIngreso"  />
             </div>
            </div>
            <div class="col-md-6"> 
                <div class="container">
                     <label class="control-label" for= "fechaEgreso">Fecha de Egreso: </label>
                     <input type="date" placeholder="DD" name="fechaEgreso"  />
                </div>   
            </div>
        </div>
            {{-- SUBMIT --}}
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Cargar </button>
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
