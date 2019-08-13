<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'data',
        'turno'
    ];

    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}


