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
                <input class="form-control" type="text" name="propuesta" id="text-input" placeholder="Propuesta  Laboral Ofrecida...">
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
                <textarea class="form-control" name="requisito" id="textarea-input" placeholder="Requisitos minimos esperado del postulante"></textarea>
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
                   
            </div>
        </div>
        
          
    {{-- REMUNERACION --}}

                <div class="form-group"> 
                    <label class="control-label">Remuneracion Ofrecida:</label> 
                <div class="col-md-2">
                           
                     <input class="form-control"  type="number"  name="remuneracion" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                </div>
                </div>
   </div>
  
            {{-- Fechas de ingreso y egreso --}}
             <div class="form-group">
        <div class="row">
            <div class="col-md-8"> 
            <table class="table table-user-information">   
                  <tbody> 
                  <tr>         
                            
        
                       <td>   <label class="control-label" for="fechaIngreso">Duración: </label> </td>
                        
                        <td><input id="number" type="number"  />  </td>
                       
                        <td> <select name="categoria"  class="form-control" required>
                                        <option value="pasante">Días</option>
                                        <option value="pasante">Semanas</option>
                                        <option value="encargado">Meses</option>
                                        <option value="estudiante">Años</option>
                                </select>  </td>
                                       </tbody>
          </table>
             </div>
            </div>
        </div>
            {{-- SUBMIT --}}
            <br>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Cargar </button>
            <a  type="button" class="btn btn-primary col-md-offset-9 "  href="{{ url('productor/mostrarOportunidad') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
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
