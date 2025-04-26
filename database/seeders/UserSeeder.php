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
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'adminn123',
            'role' => 'admin',
        ], [
            'nama' => 'Pengola',
            'email' => 'pengola@gmail.com',
            'password' => 'pengola123',
            'role' => 'pengola',
        ], [
            'nama' => 'Supplier',
            'email' => 'supplier@gmail.com',
            'password' => 'supplier123',
            'role' => 'supplier',
        ]);
    }
}
