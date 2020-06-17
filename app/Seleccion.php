<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model
{
    //  //
    public function oportunidad()
    {
    	return $this->belongsTo('inetweb\Oportunidad','oportunidad_id');
    }
    //
    public function productor()
    {
    	return $this->belongsTo('inetweb\productor','productor_id');
    }

    public function capacidad()
    {
    	return $this->belongsTo('inetweb\Capacidad','capacidad_id');
    }
}
