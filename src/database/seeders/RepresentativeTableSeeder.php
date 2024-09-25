<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RepresentativeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $representative = User::create([
            'name' => '仙人',
            'email' => 'sennin@test.com',
            'password' => bcrypt('sennin_pass'),
        ]);

        $representativeRole = Role::create(['name' => 'representative']);

        $representative->assignRole($representativeRole);

        $representative = User::create([
            'name' => '牛助',
            'email' => 'gyuusuke@test.com',
            'password' => bcrypt('gyuusuke_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '旋律',
            'email' => 'senritu@test.com',
            'password' => bcrypt('senritu_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => 'ルーク',
            'email' => 'ru-ku@test.com',
            'password' => bcrypt('ru-ku_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '志摩屋',
            'email' => 'simaya@test.com',
            'password' => bcrypt('simaya_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '香',
            'email' => 'kaoru@test.com',
            'password' => bcrypt('kaoru_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => 'JJ',
            'email' => 'jj@test.com',
            'password' => bcrypt('jj_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => 'ラーメンの極み',
            'email' => 'ra-mennokiwami@test.com',
            'password' => bcrypt('ra-mennokiwami_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '鳥雨',
            'email' => 'toriame@test.com',
            'password' => bcrypt('toriame_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '築地色合',
            'email' => 'tukijiiroai@test.com',
            'password' => bcrypt('tukijiiroai_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '晴海',
            'email' => 'harumi@test.com',
            'password' => bcrypt('harumi_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '三子',
            'email' => 'sanko@test.com',
            'password' => bcrypt('sanko_pass'),
        ]);

        $representative->assignRole('representative');

        $representative = User::create([
            'name' => '八戒',
            'email' => 'hakkai@test.com',
            'password' => bcrypt('hakkai_pass'),
        ]);

        $representative->assignRole('representative');
    }
}
