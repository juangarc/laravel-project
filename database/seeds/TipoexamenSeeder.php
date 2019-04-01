<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoexamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_examens')->insert([
            'name' => 'Hemograma completo',
        ]);

        DB::table('tipo_examens')->insert([
            'name' => 'Urinálisis completo',
        ]);

        DB::table('tipo_examens')->insert([
            'name' => 'Ultrasonido',
        ]);

        DB::table('tipo_examens')->insert([
            'name' => 'Panel metabólico',
        ]);
    }
}
