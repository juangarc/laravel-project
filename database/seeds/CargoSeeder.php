<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            'name' => 'Finanzas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Distribuidor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Coordinador',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Servicio al cliente',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Contabilidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Tesoreria',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Talento humano',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Asistente de sistemas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Ingeniero de sistemas',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
