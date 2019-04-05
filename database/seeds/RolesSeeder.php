<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'costumer',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id' => 1
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 2,
            'model_type' => 'App\User',
            'model_id' => 2
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 3,
            'model_type' => 'App\User',
            'model_id' => 3
        ]);


    }
}
