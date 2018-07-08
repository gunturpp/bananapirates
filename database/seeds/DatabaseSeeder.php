<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(category_storesTableSeeder::class);
        $this->call(event_projectTableSeeder::class);
        $this->call(partner_medsosTableSeeder::class);
        $this->call(StoresTableSeeder::class);
    }
}
