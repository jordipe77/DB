<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    protected $table = 'donantes';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function sexo()
    {
        return $this->belongsTo('App\Models\Sexo','id');
    }

    public function tipo_donante()
    {
        return $this->belongsTo('App\Models\TipoDonantes','id');
    }

    public function animales()
    {
        return $this->belongsToMany('App\Models\Animal','donantes_animales','id','id');
    }

    public function donativo()
    {
        return $this->hasMany('App\Models\Donativo','id');
    }

}
