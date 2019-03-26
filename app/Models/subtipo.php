<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtipo extends Model
{
    protected $table = 'subtipos';
    protected $primarykey=['id','tipos_id'];
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function tipo()
    {
        return $this->belongsTo('App\Models\Tipo','id');
    }
}

