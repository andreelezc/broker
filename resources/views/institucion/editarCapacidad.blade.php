@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a Capacidades Laborales</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

     {{-- Inicio FORM --}}
            <form method="POST" action="{{ url('institucion/capacidad/editar/'.$capacidad->id) }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
             {{ method_field('PUT') }}
            <h2 class="text-center">Capacidad Laboral</h2>
            {{-- TITULO --}}
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo :</label>
                <input class="form-control" type="text" name="titulo" id="text-input" value="{{ $capacidad->titulo }}">
            </div>
            
            {{-- PROPUESTA --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Objetivos: </label>
                <input class="form-control" type="text" name="propuesta" id="text-input" placeholder="Mi objetivo es ..." value="{{ $capacidad->propuesta }}">
            </div>
            {{-- EXPERIENCIA --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Experiencia: </label>
                <textarea class="form-control" name="experiencias" id="textarea-input">{{ $capacidad->experiencias }}
                </textarea>
            </div>
                 {{-- PALABRAS CLAVE --}}
         <div class="form-group">
            <div class="row">
                <div class="col-md-12"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su capacidad laboral)</label>
                </div>
                 @foreach($capacidad->keywords as $key)
                <div class="col-md-3">
                    <input name="palabra" type="text" class="form-control" required  value=" {{ $key->palabra }}"  disabled />
                </div>
                @endforeach
            </div>
        </div> 

            <div class="row">
                <div class="col-md-6">
                     {{-- CATEGORIA --}}
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria: </label>
                        <select name="categoria"  class="form-control" required>
                                
                                <option value="pasante" 
                                @if ($capacidad->categoria == "pasante")
                                    selected
                                @endif
                                >Pasante</option>
                                <option value="encargado"
                                @if ($capacidad->categoria == "encargado")
                                    selected
                                @endif
                                >Encargado</option>
                                <option value="estudiante"
                                @if ($capacidad->categoria == "estudiante")
                                    selected
                                @endif
                                >Estudiante</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                          {{-- RUBRO --}}
                 <div class="form-group">
                <label class="control-label" for="textarea-input">Rubro: </label>
                        <select name="rubro"  class="form-control" required>
                                    <option value="pyme"
                                    @if ($capacidad->rubro == "pyme")
                                        selected
                                    @endif
                                    >PYME</option>
                                    <option value="beca"
                                    @if ($capacidad->rubro == "beca")
                                        selected
                                    @endif
                                    >Beca</option>
                                    <option value="emprededores"
                                    @if ($capacidad->rubro == "emprendedores")
                                        selected
                                    @endif
                                >Emprededores</option>
                        </select>
                    </div>
                </div>
            </div>
    {{-- DISPONIBILIDAD --}}
    <div class="row">
        <div class="col-md-6">
            
            <div class="form-group">
                <label class="control-label">Disponibilidad Horaria: </label>
                <input class="form-control" type="text" name="disponibilidad" minlength="5" inputmode="full-width-latin" placeholder="00:00   a  00:00" value="{{ $capacidad->disponibilidad }}">
            </div>
        </div>
    {{-- REMUNERACION --}}
    <div class="col-md-6">
            <div class="form-group">
        
               <label class="control-label">Remuneracion Pretendida: </label>
                <input class="form-control" type="text"  name="remuneracion" value="{{ $capacidad->remuneracion }}"  placeholder="$" >
            </div>
    </div>
    </div>

       
    {{-- SUBMIT --}}
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar Cambios </button>
            <a  type="button" class="btn btn-primary col-md-offset-8 "  href="{{ url('institucion/mostrarCapacidad') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
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