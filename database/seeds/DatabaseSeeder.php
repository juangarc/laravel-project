<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(TipoexamenSeeder::class);
        $this->call(ExamenSeeder::class);
        $this->call(ProductoSeeder::class);
        //$this->call(RolesSeeder::class);
    }
}
