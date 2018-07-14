<?php

namespace inetweb;
use inetweb\Institucion;
use inetweb\CapacidadKey;
use Illuminate\Database\Eloquent\Model;

class capacidad extends Model

{
    //relacion de la capacidad con la institucion
    //capacidad->"perteneceA"->institucion

    public function institucion()
    {
       
    	return $this->belongsTo('inetweb\Institucion');
    }

     public function keywords()
    {
    	return $this->hasMany('inetweb\CapacidadKey');
    }
    public function addKey($palabra)
    {
    	$key = new CapacidadKey;
    	$key->capacidad_id = $this->id;
    	$key->palabra = $palabra;
    	$key->save();
    	return $this;
    }

    public function selecciones()
    {
        return $this->belongsTo('inetweb\Seleccion');
    }

  
}
