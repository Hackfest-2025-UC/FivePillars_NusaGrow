<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminn123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Produsen',
                'email' => 'produsen@gmail.com',
                'password' => bcrypt('pengola123'),
                'role' => 'produsen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Supplier',
                'email' => 'supplier@gmail.com',
                'password' => bcrypt('supplier123'),
                'role' => 'supplier',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
