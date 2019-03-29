<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $table = 'centros';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function donativo()
    {
        return $this->hasMany('App\Models\Donativo','centros_receptor_id','centros_desti_id');
    }
}
