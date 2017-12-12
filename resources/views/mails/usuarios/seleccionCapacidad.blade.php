
@component('mail::message')

 <h2 class="panel-title text-center">{{$name}} Seleccionó tu Capacidad </h2>

Este Productor selecciono tu capacidad {{$titulo}}

@component('mail::button', ['url' => 'http://linsse.com.ar/inetweb/institucion/acceso'])
ver
@endcomponent

<br> 
{{--  {{ config('app.name') }} --}}

@endcomponent







