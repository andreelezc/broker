@component('mail::message')
# Bienvenido <h3 class="panel-title text-center"> {{$name}}</h3>

Gracias por Registrarte a Inet Web

@component('mail::button', ['url' => 'http://linsse.com.ar/inetweb/institucion/acceso'])
ir a Mi Cuenta 
@endcomponent

<br>
{{ config('app.name') }}
@endcomponent



