<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examenes')->insert([
            'name' => '· Hemograma tipo I',
            'cod_tipoexamen' => '1'
        ]);

        DB::table('examenes')->insert([
            'name' => '· Hemograma tipo II',
            'cod_tipoexamen' => '1'
        ]);

        DB::table('examenes')->insert([
            'name' => '· Hemograma tipo III',
            'cod_tipoexamen' => '1'
        ]);

        DB::table('examenes')->insert([
            'name' => 'Examen de Orina',
            'cod_tipoexamen' => '2'
        ]);
        DB::table('examenes')->insert([
            'name' => 'Ultrasonido endoscópico',
            'cod_tipoexamen' => '3'
        ]);

        DB::table('examenes')->insert([
            'name' => 'Ultrasonido transabdominal',
            'cod_tipoexamen' => '3'
        ]);

        DB::table('examenes')->insert([
            'name' => 'Ultrasonido transvaginal',
            'cod_tipoexamen' => '3'
        ]);

        DB::table('examenes')->insert([
            'name' => 'Básico',
            'cod_tipoexamen' => '4'
        ]);

        DB::table('examenes')->insert([
            'name' => 'Completo',
            'cod_tipoexamen' => '4'
        ]);
        
    }
}
