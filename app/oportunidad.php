<?php

namespace inetweb;
use inetweb\Productor;
use inetweb\OportunidadKey;
use Illuminate\Database\Eloquent\Model;

class oportunidad extends Model
{
    //
    public function productor()
    {
    	return $this->belongsTo('inetweb\Productor','productor_id');
    }

    public function keywords()
    {
    	return $this->hasMany('inetweb\OportunidadKey','oportunidad_id');
    }

    public function addKey($palabra)
    {
    	$key = new OportunidadKey;
    	$key->oportunidad_id = $this->id;
    	$key->palabra = $palabra;
    	$key->save();
    	return $this;
    }
}
