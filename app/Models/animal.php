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
        return $this->belongsToMany('App\Models\Donante','donantes_animales','id','id');
    }

    public function donativo()
    {
        return $this->belongsToMany('App\Models\Donativo','animales_donativos','id','id');
    }
}
