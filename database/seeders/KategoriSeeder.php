<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kategori_kode' => 'KTG001', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'KTG002', 'kategori_nama' => 'Furnitur'],
            ['kategori_kode' => 'KTG003', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'KTG004', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'KTG005', 'kategori_nama' => 'Alat Tulis'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
