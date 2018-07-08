<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
                'fk_userid' => 1,
                'title' => 'Perjalanan Kepulau Banana',
                'content' => 'Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum ',
                'pictures' => 'images/blogs/banner.jpg'
            ],
            [
                'fk_userid' => 1,
                'title' => 'Perjalanan Kepulau Pisang',
                'content' => 'Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum ',
                'pictures' => 'images/blogs/batik.jpg'
            ]
        ];
        foreach($blogs as $blog) {
            DB::table('blogs')->insert($blog);
        }
    }
}