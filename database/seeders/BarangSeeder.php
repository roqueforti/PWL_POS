<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $categories = [1, 2, 3, 4, 5]; // Id kategori
        $suppliers = [1, 2, 3]; // Id supplier

        foreach ($suppliers as $supplier_id) {
            foreach ($categories as $index => $kategori_id) {
                $data[] = [
                    'kategori_id' => $kategori_id,
                    'barang_kode' => 'BRG' . str_pad(($supplier_id - 1) * 5 + $index + 1, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Barang ' . (($supplier_id - 1) * 5 + $index + 1),
                    'harga_beli' => rand(10000, 50000),
                    'harga_jual' => rand(60000, 100000),
                ];
            }
        }

        DB::table('m_barang')->insert($data);
    }
}
