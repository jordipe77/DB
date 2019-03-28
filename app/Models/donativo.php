<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donativo extends Model
{
    protected $table = 'donativos';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario','id');
    }

    public function animales()
    {
        return $this->belongsToMany('App\Models\Usuario','animales_donativos','id','id');
    }

    public function centros()
    {
        return $this->belongsTo('App\Models\Centro','id');
    }
    public function donantes()
    {
        return $this->belongsTo('App\Models\Donante','id');
    }
    public function subtipos()
    {
        return $this->belongsTo('App\Models\Subtipo','id');
    }
}
