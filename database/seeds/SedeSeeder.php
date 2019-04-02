<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sedes')->insert([
            'name' => 'Palmira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Cali',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Tulua',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Pereira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Armenia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Buenaventura',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Buga',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Piendamo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Cartago',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('sedes')->insert([
            'name' => 'Santander',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
