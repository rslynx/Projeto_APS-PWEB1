<?php

use App\Consulta;
use Illuminate\Database\Seeder;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consulta = new Consulta;
        $consulta->data = '10/0/0';
        $consulta->turno = 'tarde';
        $consulta->pessoa_id = '1';
        $consulta->save();
    }
}
