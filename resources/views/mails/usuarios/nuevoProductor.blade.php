
@component('mail::message')

 <h2 class="panel-title text-center">Bienvenido Productor! {{$name}}</h2>

Gracias por Registrarte a Inet Web.

Ingresa a tu cuenta para emprezar.- 

@component('mail::button', ['url' => 'http://linsse.com.ar/inetweb/institucion/acceso'])
ir a Mi Cuenta 
@endcomponent

<br> 
{{--  {{ config('app.name') }} --}}

@endcomponent



