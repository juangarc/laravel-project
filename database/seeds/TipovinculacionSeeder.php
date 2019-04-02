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
            'name' => 'planta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_vinculacions')->insert([
            'name' => 'estudiante',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_vinculacions')->insert([
            'name' => 'contratista',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
    }
}
