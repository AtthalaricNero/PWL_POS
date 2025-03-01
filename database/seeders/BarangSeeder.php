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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'ELKTR001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 8000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELKTR002',
                'barang_nama' => 'Mouse',
                'harga_beli' => 100000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'KNDR001',
                'barang_nama' => 'Mobil',
                'harga_beli' => 5000000,
                'harga_jual' => 90000000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'KNDR002',
                'barang_nama' => 'Motor',
                'harga_beli' => 1000000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BGN001',
                'barang_nama' => 'Rumah',
                'harga_beli' => 5000000,
                'harga_jual' => 9000000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BGN002',
                'barang_nama' => 'Tanah',
                'harga_beli' => 1000000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'PRLTN001',
                'barang_nama' => 'Peralatan Masak',
                'harga_beli' => 50000,
                'harga_jual' => 90000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'PRLTN002',
                'barang_nama' => 'Peralatan Olahraga',
                'harga_beli' => 100000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PRLKP001',
                'barang_nama' => 'Perlengkapan Rumah',
                'harga_beli' => 50000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PRLKP002',
                'barang_nama' => 'Perlengkapan Kantor',
                'harga_beli' => 100000,
                'harga_jual' => 200000,
            ]
        ];
        
        DB::table('m_barang')->insert($data);
    }
}
