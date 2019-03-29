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
        return $this->belongsTo('App\Models\Sexo','sexos_id');
    }

    public function TipoDonantes()
    {
        return $this->belongsTo('App\Models\TipoDonantes','tipos_donantes_id');
    }

    public function animales()
    {
        return $this->belongsToMany('App\Models\Animal','donantes_animales','donantes_id','animales_id');
    }

    public function donativo()
    {
        return $this->hasMany('App\Models\Donativo','donantes_id');
    }

}
