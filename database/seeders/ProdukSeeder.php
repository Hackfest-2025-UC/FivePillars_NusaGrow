<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'id_user' => 1,
                'nama_produk' => 'Beras Organik Premium',
                'gambar_produk' => 'beras_organik.jpg',
                'deskripsi_produk' => 'Beras organik berkualitas tinggi, langsung dari petani lokal.',
                'kategori_produk' => 'pertanian',
                'harga_produk' => 150000,
                'latitude' => '-6.200000',
                'longitude' => '106.816666',
                'status' => 'diterima',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'nama_produk' => 'Ikan Nila Segar',
                'gambar_produk' => 'ikan_nila.jpg',
                'deskripsi_produk' => 'Ikan nila segar hasil budidaya air tawar, kualitas ekspor.',
                'kategori_produk' => 'perikanan',
                'harga_produk' => 50000,
                'latitude' => '-6.914864',
                'longitude' => '107.608238',
                'status' => 'menunggu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'nama_produk' => 'Blender Dapur Multifungsi',
                'gambar_produk' => 'blender_dapur.jpg',
                'deskripsi_produk' => 'Blender dengan 5 mode kecepatan, cocok untuk keperluan rumah tangga.',
                'kategori_produk' => 'peralatan rumah tangga',
                'harga_produk' => 350000,
                'latitude' => '-7.250445',
                'longitude' => '112.768845',
                'status' => 'ditolak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
