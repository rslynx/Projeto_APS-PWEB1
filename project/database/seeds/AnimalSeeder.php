<?php

use App\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $animal = new Animal;
        $animal->nome = 'Taysa';
        $animal->especie = 'Equino';
        $animal->raca = 'cachorro';
        $animal->corDaPelagem = 'preta';
        $animal->idade = '24';
        $animal->porteFisico = 'gra';
        $animal->comportamento = 'agressivo';
        $animal->vacinado = 'nao';
        $animal->save();
    }
}
