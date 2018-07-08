<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'banana@pirates.com',
            'password' => 'secret',
            'name' => 'Admin Ganteng',
            'role' => 7,
            'report_cashflow' => 'www',
            'pictures' => '/images/default/avatar.jpg',
            'gender' => 1,
        ]);
    }
}
