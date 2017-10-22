<?php

namespace inetweb;

use inetweb\Institucion;
use Illuminate\Database\Eloquent\Model;

class capacidad extends Model
{
    //relacion de la capacidad con la institucion
    //capacidad->"perteneceA"->institucion

    public function institucion()
    {
    	return $this->belongsTo('inetweb\Institucion','institucion_id');
    }
}
