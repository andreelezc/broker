@component('mail::message')
# Oportunidad Postulada

Inicia en tu cuenta para ver .

@component('mail::button', ['url' => ''])
Acceder
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
