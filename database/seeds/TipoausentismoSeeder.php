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
            'name' => 'Incapacidad por enfermedad general',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Incapacidad por accidente de trabajo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Ausencia sin excusa',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Cita médica',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Incapacidad por enfermedad laboral',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Exámenes médicos laborales',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Exámenes médicos generales',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Licencia de paternidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Licencia de maternidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipoausentismos')->insert([
            'name' => 'Suspensión',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
