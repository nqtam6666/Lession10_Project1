<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nqtVatTuMauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nqtvattu')->insert([
        'nqtMaVTu'=>'DD01',
        'nqtTenVTu'=>'Đầu DVD Hitachi 1 cửa',
        'nqtDvTinh'=>'Bộ',
        'nqtPhanTram'=>40,
        ]);
        DB::table('nqtvattu')->insert([
            'nqtMaVTu'=>'DD02',
            'nqtTenVTu'=>'Đầu DVD Hitachi 1 cửa1',
            'nqtDvTinh'=>'Bộ',
            'nqtPhanTram'=>50,
            ]);

    }
}
