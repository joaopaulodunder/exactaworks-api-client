<?php

use Illuminate\Database\Seeder;

class Gastos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Gasto::create([
            'nome' => str_random(10),
            'descricao' => str_random(10),
            'data_hora' => date('Y-m-d H:i:s'),
            'valor' => random_int(1,3) . '.' . random_int(1,2),
            'tag' => str_random(5)
        ]);
    }
}
