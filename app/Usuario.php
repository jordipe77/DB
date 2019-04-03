<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = "usuarios";
    public $timestamps = false;

    //--------------------------------

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';



    //-------------------------------

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol()
    {
        return $this->belongsTo('App\Rol','roles_id');
    }

    public function donativos()
    {
        return $this->hasMany('App\Models\Donativo','usuarios_id');
    }
}
