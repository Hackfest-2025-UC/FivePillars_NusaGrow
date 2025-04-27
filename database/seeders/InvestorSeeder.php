<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('investors')->insert([
            [
                'nama_investor' => 'Andi Pratama',
                'deskripsi_investor' => 'Investor aktif di bidang teknologi dan startup digital.',
                'pekerjaan_investor' => 'CEO Tech Invest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_investor' => 'Rina Wijaya',
                'deskripsi_investor' => 'Fokus pada investasi agribisnis dan manufaktur.',
                'pekerjaan_investor' => 'Managing Director Agro Corp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_investor' => 'Budi Santoso',
                'deskripsi_investor' => 'Berpengalaman dalam investasi properti dan real estate.',
                'pekerjaan_investor' => 'Founder Properti Maju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
