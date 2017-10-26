<?php

namespace inetweb;
use inetweb\Productor;
use inetweb\keyword;
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
    	return $this->hasMany('inetweb\keyword','referencia');
    }
}
