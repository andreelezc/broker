<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;
use inetweb\Oportunidad;

class Keyword extends Model
{
    //

    public function oportunidad()
    {
    	return $this->belongsTo('inetweb\Oportunidad','referencia');
    }
}
