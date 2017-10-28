<?php

namespace inetweb;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use inetweb\capacidad;

class Institucion extends Authenticatable
{
      use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'direccion', 'password',
    ];

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

    
public function listaTCapacidad()
    {
        return $this->hasMany('inetweb\capacidad');
    }

}
