<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('departamentos')->truncate();//vaciar campos

        DB::table('departamentos')->insert([
            'name' => 'Valle del Cauca',
        ]);
        DB::table('departamentos')->insert([
            'name' => 'Quindio',
        ]);
        DB::table('departamentos')->insert([
            'name' => 'Risaralda',
        ]);

    }
}
