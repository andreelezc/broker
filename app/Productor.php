<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use inetweb\Seleccion;
class Productor extends Authenticatable
{
    //
   use Notifiable,SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'direccion', 'password','name1', 'email1', 'telefono1', 'cuil', 'hora','url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relacion con capacidad
    //productor->"tienevarias"->oportunidades
    public function oportunidades()
    {
        return $this->hasMany('inetweb\oportunidad');
    }

    // public function intereses()
    // {
    //     return $this->hasMany('inetweb\InteresProductor');
    // }
    
      public function selecciones(){
        return $this->hasMany('inetweb\Seleccion');
    }


    

}
