<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'barang_id' => 1,
                'kategori_id' => 2,
                'barang_kode' => 'ELC0001KB',
                'barang_nama' => 'kabel',
                'harga_beli' => 10000,
                'harga_jual' => 25000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'ELC0002OL',
                'barang_nama' => 'oven listrik',
                'harga_beli' => 550000,
                'harga_jual' => 700000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'ELC0003HP',
                'barang_nama' => 'handphone',
                'harga_beli' => 5000000,
                'harga_jual' => 5500000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'ELC0004LP',
                'barang_nama' => 'laptop',
                'harga_beli' => 14000000,
                'harga_jual' => 14500000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'ELC0005MS',
                'barang_nama' => 'mouse',
                'harga_beli' => 85000,
                'harga_jual' => 100000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'RT0001KR',
                'barang_nama' => 'kursi',
                'harga_beli' => 75000,
                'harga_jual' => 90000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 1,
                'barang_kode' => 'RT0002MJ',
                'barang_nama' => 'meja',
                'harga_beli' => 70000,
                'harga_jual' => 85000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 1,
                'barang_kode' => 'RT0003TF',
                'barang_nama' => 'teflon',
                'harga_beli' => 40000,
                'harga_jual' => 55000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 1,
                'barang_kode' => 'RT0004KM',
                'barang_nama' => 'kompor',
                'harga_beli' => 150000,
                'harga_jual' => 175000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 1,
                'barang_kode' => 'RT0005SP',
                'barang_nama' => 'sapu',
                'harga_beli' => 20000,
                'harga_jual' => 35000
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 5,
                'barang_kode' => 'PKN0001KMJ',
                'barang_nama' => 'kemeja',
                'harga_beli' => 100000,
                'harga_jual' => 150000
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 5,
                'barang_kode' => 'PKN0002CLN',
                'barang_nama' => 'celana',
                'harga_beli' => 120000,
                'harga_jual' => 135000
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'PKN0003JK',
                'barang_nama' => 'jaket',
                'harga_beli' => 250000,
                'harga_jual' => 270000
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'PKN0004HJ',
                'barang_nama' => 'hijab',
                'harga_beli' => 25000,
                'harga_jual' => 40000
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'PKN0002MKN',
                'barang_nama' => 'mukena',
                'harga_beli' => 100000,
                'harga_jual' => 115000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}