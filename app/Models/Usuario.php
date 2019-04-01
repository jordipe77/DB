<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function rol()
    {
        return $this->belongsTo('App\Models\Rol','roles_id');
    }

    public function donativos()
    {
        return $this->hasMany('App\Models\Donativo','usuarios_id');
    }

}
