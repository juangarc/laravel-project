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

        DB::table('cargos')->insert([
            'name' => 'Asistente de Produccion',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Auxiliar de Mercadeo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Gerente',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Jefe de Publicidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Subgerente',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Auxiliar de Cartera',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Mensajeria y Relaciones Externas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('cargos')->insert([
            'name' => 'Archivo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
