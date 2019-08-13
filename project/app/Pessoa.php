<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cep',
        'cpf'
    ];

    public function animais()
    {
        return $this->hasMany('App\Animal');
    }

    public function consultas()
    {
        return $this->hasMany('App\Consulta');
    }
}
