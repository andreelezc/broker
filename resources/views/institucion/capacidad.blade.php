@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido a Capacidades Laborales</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

     {{-- Inicio FORM --}}
            <form method="POST" action="{{ url('institucion/capacidad') }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}
            <h2 class="text-center">Capacidad Laboral</h2>
            {{-- TITULO --}}
            <div class="form-group">
                <label class="control-label" for="text-input"> Titulo: </label>
                <input class="form-control" type="text" name="titulo" id="text-input">
            </div>
            
            {{-- PROPUESTA --}}
            <div class="form-group">
                <label class="control-label" for="email-input"> Descripción: </label>
                <textarea class="form-control"  name="propuesta" id="text-input" placeholder=" ..."></textarea>
            </div>
            {{-- EXPERIENCIA --}}
            <div class="form-group">
                <label class="control-label" for="textarea-input">Experiencias previas: </label>
                <textarea class="form-control" name="experiencias" id="textarea-input"></textarea>
            </div>
                 {{-- PALABRAS CLAVE --}}
        <div class="form-group">
            <div class="row">
                <div class="col-md-10"> <label class="control-label">Palabras Clave:</label>
                <label>(ingrese palabras clave para facilitar la busqueda de su capacidad laboral)</label>
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

            <div class="row">
                <div class="col-md-6">
                     {{-- CATEGORIA --}}
              <div class="form-group">
                <label class="control-label" for="textarea-input">Categoria: </label>
                        <select name="categoria"  class="form-control" required>
                                
                                <option value="pasante">Pasante</option>
                                <option value="encargado">Trabajo Final</option>
                                <option value="estudiante">otros</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                          {{-- RUBRO --}}
                 <div class="form-group">
                <label class="control-label" for="textarea-input">Orientado a: </label>
                        <textarea class="form-control"  name="orientacion" id="text-input" placeholder=" ..."></textarea>
                    </div>
                </div>
            </div>
    {{-- DISPONIBILIDAD --}}
    <div class="row">
        <div class="col-md-8">
            
            <div class="form-group">
                
                <label class="control-label">Disponibilidad Horaria: </label>

                <div class="row">
                <div class="col-md-8 ">
                <div class="form-group">
                Fecha de inicio <input type="date" placeholder="DD" name="disponibilidad"/>
               
                </div></div></div>
                 

                <div class="row">
                <div class="col-md-6">
                 <div class="form-group"> 
                 <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                     <td><span class="badge">Lunes</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                   <tr>         
                     <td><span class="badge">Martes</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><span class="badge">Miercoles</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><span class="badge">Jueves</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><span class="badge">Viernes</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                      <tr>         
                     <td><span class="badge">Sabado</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                     <tr>         
                     <td><span class="badge">Domingo</span></td>
                     <td><input type="time" placeholder="00" name="disponibilidad" /></td> 
                     <td> <input type="time" placeholder="00" name="disponibilidad" /></td>
                  </tr> 
                  <p></p>
                   </tbody>
          </table>
                   </div></div></div>
                   <div class="row">
                 <div class="col-md-8">
                <div class="form-group">
                 Fecha de  finalización <input type="date" placeholder="DD" name="disponibilidad"/>
                </div></div></div>

            </div>
        </div>
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneracion Pretendida:</label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                </div>
                </div>
   </div>
  

       
    {{-- SUBMIT --}}
        <div class="form-group">
            <button class="btn btn-primary " type="submit">Cargar </button>
            <a  type="button" class="btn btn-primary col-md-offset-9 "  href="{{ url('institucion/mostrarCapacidad') }}"> Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
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