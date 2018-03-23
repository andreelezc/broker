
@component('mail::message')

 <h2 class="panel-title text-center">Bienvenida Institución! {{$name}}</h2>

Gracias por Registrarte a Inet Web.

El administrador del sitio evaluará tu solicitud y realizará el alta definitiva.

Te avisaremos con un correo electrónico para poder ingresa a tu cuenta, completar tus datos y empezar a operar con tus capacidades.- 

@component('mail::button', ['url' => 'http://linsse.com.ar/inetweb/institucion/acceso'])
ir a Mi Cuenta 
@endcomponent

<br> 
{{--  {{ config('app.name') }} --}}

@endcomponent



