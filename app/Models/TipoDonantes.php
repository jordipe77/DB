<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDonantes extends Model
{
    protected $table = 'tipos_donantes';
    protected $primarykey='id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    public function donante()
    {
    return $this->hasMany('App\Models\Donante','tipos_donantes_id');
    }
}
