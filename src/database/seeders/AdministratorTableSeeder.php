<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = User::create([
            'name' => 'rese管理者',
            'email' => 'rese@test.com',
            'password' => bcrypt('reservation_pass'),
        ]);

        $adminRole = Role::create(['name' => 'admin']);

        $administrator->assignRole($adminRole);
    }
}
