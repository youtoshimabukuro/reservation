<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_time' => '09:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '09:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '10:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '10:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '11:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '11:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '12:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '12:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '13:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '13:30',
        ];
        $param = [
            'reservation_time' => '14:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '14:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '15:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '15:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '16:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '16:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '17:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '17:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '18:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '18:30',
        ];
        DB::table('times')->insert($param);
    }
}
