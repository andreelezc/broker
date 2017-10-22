<?php

namespace inetweb;
use inetweb\Productor;
use Illuminate\Database\Eloquent\Model;

class oportunidad extends Model
{
    //
    public function productor()
    {
    	return $this->belongsTo('inetweb\Productor','productor_id');
    }
}
