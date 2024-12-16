<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class nqtNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('nqtnhacc')->insert([
            'nqtMaNCC'=>$faker->word(5) . $faker->ean13(),
            // 'MaNCC'=>$faker->word(15),
            'nqtTenNCC'=>$faker->name(),
            'nqtDiachi'=>$faker->address(),
            'nqtDienthoai'=>$faker->phoneNumber(10),
            'nqtemail'=>$faker->email(),
            'nqtstatus'=>$faker->boolean()
            ]);
        }
    }
}
