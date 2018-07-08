<?php

use Illuminate\Database\Seeder;

class partner_medsosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner_and_medsos = [
            [
                "name" => "Twitter",
                "username" => "bananapirats",
                "url" => "www.twitter.com/bananapirates",
                "logo" => "/images/logo/twitter.jpg",
                "category" => "medsos"
            ],[
                "name" => "Facebook",
                "username" => "bananapirats",
                "url" => "www.twitter.com/bananapirates",
                "logo" => "/images/logo/fb.jpg",
                "category" => "medsos"
            ],[
                "name" => "Line",
                "username" => "@bananapirats",
                "url" => "www.line.com/bananapirates",
                "logo" => "/images/logo/line.jpg",
                "category" => "medsos"
            ],[
                "name" => "Instagram",
                "username" => "bananapirats",
                "url" => "www.instagram.com/bananapirates",
                "logo" => "/images/logo/ig.jpg",
                "category" => "medsos"
            ],[
                "name" => "Kitabisa.com",
                "username" => "bananapirates",
                "url" => "www.kitabisa.com/bananapirates",
                "logo" => "/images/logo/kitabisa.jpg",
                "category" => "partner"
            ]
        ];
        foreach($partner_and_medsos as $partner_and_medsoss) {
            DB::table('partner_and_medsos')->insert($partner_and_medsoss);
        }
    }
}