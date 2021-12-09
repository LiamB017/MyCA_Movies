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
    // This seeder calls the RoleSeeder and UserSeeder
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
   
    }
}
