<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipovinculacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_vinculacions')->insert([
            'name' => 'Independiente',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_vinculacions')->insert([
            'name' => 'Planta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_vinculacions')->insert([
            'name' => 'Estudiante',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_vinculacions')->insert([
            'name' => 'Contratista',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
    }
}
