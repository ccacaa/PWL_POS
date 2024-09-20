<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'kategori_id' => 1,
                'kategori_kode' => 'RT',
                'kategori_nama' => 'perabotan rumah tangga',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'ELC',
                'kategori_nama' => 'elektonik',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'SNC',
                'kategori_nama' => 'makanan dan minuman',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'ATK',
                'kategori_nama' => 'alat tulis',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'PKN',
                'kategori_nama' => 'pakaian',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}