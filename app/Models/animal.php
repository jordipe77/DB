<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function donantes()
    {
        return $this->belongsToMany('App\Models\Donante','donantes_animales','donantes_id','animales_id');
    }

    public function donativo()
    {
        return $this->belongsToMany('App\Models\Donativo','animales_donativos','animales_id','donativos_id');
    }
}
