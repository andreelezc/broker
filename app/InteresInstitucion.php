<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;

class InteresInstitucion extends Model
{
     //
    public function oportunidad()
    {
    	return $this->belongsTo('inetweb\oportunidad','oportunidad_id');
    }

    //
    public function institucion()
    {
    	return $this->belongsTo('inetweb\institucion','institucion_id');
    }
}
