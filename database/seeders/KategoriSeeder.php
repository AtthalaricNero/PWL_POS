<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'kategori_id' => 1, 
            'kategori_kode' => 'ELKTR', 
            'kategori_nama' => 'Elektronik'],
            [
            'kategori_id' => 2, 
            'kategori_kode' => 'KNDR', 
            'kategori_nama' => 'Kendaraan'],
            [
            'kategori_id' => 3, 
            'kategori_kode' => 'BGN', 
            'kategori_nama' => 'Bangunan'],
            [
            'kategori_id' => 4, 
            'kategori_kode' => 'PRLTN', 
            'kategori_nama' => 'Peralatan'],
            [
            'kategori_id' => 5, 
            'kategori_kode' => 'PRLKP', 
            'kategori_nama' => 'Perlengkapan'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
