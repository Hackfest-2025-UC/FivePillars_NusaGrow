<?php

namespace Database\Seeders;

use App\Models\KebutuhanProdusen;
use App\Models\Produsen;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'nama' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'admin'
        // ]);

        $user = User::insertGetId([
            'nama' => 'asssssd',
            'email' => 'asd@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'supplier'
        ]);

        $produsen = Produsen::create([
            'id_user' => $user,
            'nama_produsen' => 'asd',
            'alamat_produsen' => 'asd'
        ]);

        KebutuhanProdusen::create([
            'id_produsen' => $produsen->id_produsen,
            'nama_kebutuhan' => 'asd',
            'jumlah_kebutuhan' => 2,
            'latitude' => '23243',
            'longitude' => '23443'
        ]);

        // $this->call(UserSeeder::class);
    }
}
