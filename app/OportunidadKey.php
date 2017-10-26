<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;
use inetweb\oportunidad;

class OportunidadKey extends Model
{
    //
          public function oportunidad()
    {
    	return $this->belongsTo('inetweb\oportunidad','oportunidad_id');
    }
}
