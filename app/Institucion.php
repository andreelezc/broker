<?php

namespace inetweb;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use inetweb\capacidad;
use inetweb\Postulacion;

class Institucion extends Authenticatable
{
      use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'direccion', 'password','name1', 'email1', 'telefono1', 'cue', 'hora','url'
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    ///relacion con capacidad
    //institucion->"tienevarias"->capacidades
    public function capacidades()
    {
        return $this->hasMany('inetweb\capacidad');
    }

    //relacion institucion intereses
    //institucion->tinevarios->intereses
    //   public function intereses()
    // {
    //     return $this->hasMany('inetweb\InteresInstitucion');
    // }

    public function postulaciones(){
        return $this->hasMany('inetweb\Postulacion');
    }




}
