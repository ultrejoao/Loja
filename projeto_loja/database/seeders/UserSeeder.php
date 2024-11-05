<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'João Vitor',
                'username' => 'loja',
                'email' => 'joao_vitor_hass@hotmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendor@hotmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'Cliente@hotmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),

            ]
        ]);

    }
}
