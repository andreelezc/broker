<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;

class InteresProductor extends Model
{
    
    //
    public function capacidad()
    {
    	return $this->belongsTo('inetweb\capacidad','capacidad_id');
    }

    //relacion 
    public function productor()
    {
    	return $this->belongsTo('inetweb\productor','productor_id');
    }
}
