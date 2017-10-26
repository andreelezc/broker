<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;
use inetweb\Oportunidad;

class OportunidadKey extends Model
{
    //
    public function oportunidad()
    {
    	return $this->belongsTo('inetweb\Oportunidad','oportunidad_id');
    }
}
