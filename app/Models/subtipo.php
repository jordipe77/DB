<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subtipo extends Model
{
    protected $table = 'subtipos';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function tipo()
    {
        return $this->belongsTo('App\Models\tipo','id');
    }
}

