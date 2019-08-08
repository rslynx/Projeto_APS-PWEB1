<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'nome',
        'especie',
        'raca',
        'corDaPelagem',
        'idade',
        'porteFisico',
        'comportamento',
        'vacinado'
    ];


    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}
