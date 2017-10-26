<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;
use inetweb\Capacidad;

class CapacidadKey extends Model
{
    //
      public function capacidad()
    {
    	return $this->belongsTo('inetweb\Capacidad','capacidad_id');
    }
}
