<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_penjualan_detail')->insert([
            // Detail untuk Penjualan 1
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 98921,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 75256,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 61788,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 2
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 86405,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 94568,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 64347,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 3
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 84046,
                'jumlah' => 4,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 82012,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 74333,
                'jumlah' => 2,
            ],

            // Detail untuk Penjualan 4
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 60137,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 11,
                'harga' => 86572,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 12,
                'harga' => 63158,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 5
            [
                'penjualan_id' => 5,
                'barang_id' => 13,
                'harga' => 91618,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 14,
                'harga' => 81874,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 15,
                'harga' => 76859,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 6
            [
                'penjualan_id' => 6,
                'barang_id' => 1,
                'harga' => 98921,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 75256,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 3,
                'harga' => 61788,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 7
            [
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => 86405,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 5,
                'harga' => 94568,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 6,
                'harga' => 64347,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 8
            [
                'penjualan_id' => 8,
                'barang_id' => 7,
                'harga' => 84046,
                'jumlah' => 4,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 82012,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 9,
                'harga' => 74333,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 9
            [
                'penjualan_id' => 9,
                'barang_id' => 10,
                'harga' => 60137,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 11,
                'harga' => 86572,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 12,
                'harga' => 63158,
                'jumlah' => 1,
            ],

            // Detail untuk Penjualan 10
            [
                'penjualan_id' => 10,
                'barang_id' => 13,
                'harga' => 91618,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 14,
                'harga' => 81874,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 15,
                'harga' => 76859,
                'jumlah' => 2,
            ],
        ]);
    }
}
