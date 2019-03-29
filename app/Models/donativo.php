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
        return $this->belongsTo('App\Models\Usuario','usuarios_id');
    }

    public function animales()
    {
        return $this->belongsToMany('App\Models\Usuario','animales_donativos','animales_id','donativos_id');
    }

    public function centros()
    {
        return $this->belongsTo('App\Models\Centro','centros_receptor_id','centros_desti_id');
    }
    public function donantes()
    {
        return $this->belongsTo('App\Models\Donante','donantes_id');
    }
    public function subtipos()
    {
        return $this->belongsTo('App\Models\Subtipo','subtipos_id');
    }
}
