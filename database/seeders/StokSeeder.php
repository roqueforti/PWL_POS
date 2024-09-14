<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'supplier_id' => ($i % 3) + 1,
                'barang_id' => $i,
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => rand(1, 100),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
