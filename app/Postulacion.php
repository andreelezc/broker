<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    //  //
    public function oportunidad()
    {
    	return $this->belongsTo('inetweb\Oportunidad','oportunidad_id');
    }
    //
    public function institucion()
    {
    	return $this->belongsTo('inetweb\institucion','institucion_id');
    }

    public function capacidad()
    {
    	return $this->belongsTo('inetweb\Capacidad','capacidad_id');
    }
}
