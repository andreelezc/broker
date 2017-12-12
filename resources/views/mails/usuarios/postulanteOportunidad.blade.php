
@component('mail::message')

 <h2 class="panel-title text-center">Nuevo  Postulante! {{$name}}</h2>

Esta Institucion se Postuló a tu Oferta :{{$titulo}}
@component('mail::button', ['url' => 'http://linsse.com.ar/inetweb/institucion/acceso'])
ver
@endcomponent

<br> 
{{--  {{ config('app.name') }} --}}

@endcomponent



