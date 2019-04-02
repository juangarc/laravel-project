<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoausentismoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoausentismos')->insert([
            'name' => 'incapacidad por enfermedad general',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'incapacidad por accidente de trabajo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'ausencia sin excusa',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'cita médica',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'incapacidad por enfermedad laboral',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'exámenes médicos laborales',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'exámenes médicos generales',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'licencia de paternidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'licencia de maternidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'suspensión',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
