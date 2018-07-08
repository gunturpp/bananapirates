<?php

use Illuminate\Database\Seeder;

class event_projectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_projects = [
            [
                'fk_userid' => 1,
                'title' => 'Perjalanan Kepulau Banana',
                'content' => 'Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum ',
                'pictures' => 'images/event_projects/banner.jpg',
                'link_registration' => 'www.instagram.com/bananapirates'
            ],
            [
                'fk_userid' => 1,
                'title' => 'Perjalanan Kepulau Pisang',
                'content' => 'Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum ',
                'pictures' => 'images/event_projects/batik.jpg',
                'link_registration' => 'www.instagram.com/bananapirates'
            ]
        ];
        foreach($event_projects as $ebent_project) {
            DB::table('event_projects')->insert($ebent_project);
        }


    }}
