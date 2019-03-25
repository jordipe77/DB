<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function subtipo()
    {
        return $this->hasMany('App\Models\subtipo','id');
    }
}
