<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Credencial',
            'fecha_inicio' => now(),
            'fecha_fin' => now(),
            'valor' => 150000
        ]);


    }
}
