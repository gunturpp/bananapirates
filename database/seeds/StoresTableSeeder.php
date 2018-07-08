<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = [
            [
                'fk_userid' => 1,
                'pictures' => 'images/stores/AddidasTERREXA1718.jpg',
                'product_name' => 'Addidas TERREX A1718',
                'price' => 503900,
                'size' => 10,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/LenovoIdeapad32014AST.jpg',
                'product_name' => 'Lenovo Ideapad 320-14AST',
                'price' => 4591200,
                'size' => 10,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/domiwood.jpg',
                'product_name' => 'Domi-Wood',
                'price' => 150000,
                'size' => 25,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/domimug.png',
                'product_name' => 'DomiMug',
                'price' => 35000,
                'size' => 25,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/domibag.png',
                'product_name' => 'DomiBag',
                'price' => 80000,
                'size' => 25,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/domitshirt.png',
                'product_name' => 'DomiShirt',
                'price' => 125000,
                'size' => 25,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/sofaanakodongboneka.jpeg',
                'product_name' => 'sofa anak odong boneka',
                'price' => 84400,
                'size' => 15,
                'fk_category' => 1,
            ], [
                'fk_userid' => 1,
                'pictures' => 'images/stores/Daniel_Wellington_DW_Classic_Petite_melrose_black_face_32mm_.jpg',
                'product_name' => 'Daniel Wellington DW Classic Petite melrose black face 32mm',
                'price' => 940000,
                'size' => 10,
                'fk_category' => 1,
            ]
        ];
        foreach($stores as $store) {
            DB::table('stores')->insert($store);
        }
    }
}
