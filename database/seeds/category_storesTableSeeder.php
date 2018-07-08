<?php

use Illuminate\Database\Seeder;

class category_storesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_stores = [
            [
                'category' => 'Sepatu'
            ],
            [
                'category' => 'Merchandise'
            ],
            [
                'category' => 'Pakaian'
            ],
            [
                'category' => 'Stiker'
            ]
        ];
        foreach($category_stores as $category_store) {
            DB::table('category_stores')->insert($category_store);
        }
    }
}
