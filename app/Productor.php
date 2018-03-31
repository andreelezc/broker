<?php

namespace inetweb;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Productor extends Authenticatable
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'direccion', 'password','name1', 'email1', 'telefono1', 'cuit', 'hora',
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

    public function intereses()
    {
        return $this->hasMany('inetweb\InteresProductor');
    }
}
