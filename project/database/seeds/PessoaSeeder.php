<?php

use App\Pessoa;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $pessoa = new Pessoa;
        $pessoa->nome = 'Taysa';
        $pessoa->endereco = 'Rua do rio';
        $pessoa->telefone = '666';
        $pessoa->cep = '580000';
        $pessoa->cpf = '123456789';
        $pessoa->save();
    }
}
