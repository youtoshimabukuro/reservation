<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        $this->call(NumbersTableSeeder::class);
        $this->call(AdministratorTableSeeder::class);
    }
}
