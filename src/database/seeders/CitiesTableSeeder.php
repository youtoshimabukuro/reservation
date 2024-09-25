<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'city_name' => '東京都'
        ];
        DB::table('cities')->insert($param);
        $param = [
            'city_name' => '大阪府'
        ];
        DB::table('cities')->insert($param);
        $param = [
            'city_name' => '福岡県'
        ];
        DB::table('cities')->insert($param);
    }
}
