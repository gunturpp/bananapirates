<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;
use App\Blog;
use App\Eventproject;
use App\Campaign;
class HomeController extends Controller
{
    public function homepageController()
    {
        $blogs = Blog::all();
        $eventprojects = Eventproject::all();
        $campaigns = Campaign::all();
        // dd($eventprojects);
        return view('homepage', compact('blogs', 'eventprojects','campaigns'));
    }
    public function profileController()
    {
        return view('userside/profile/profile');
    }
    public function ourteamController()
    {
        return view('userside/ourteam/our-team');
    }
    public function projecteventController()
    {
        $eventprojects = DB::table('event_projects')->latest()->paginate(5);
        return view('userside/projectevent/project-event',compact('eventprojects'));
    }
    public function projecteventDetailController($id)
    {
        $projecteventDetail = Eventproject::find($id);
        $writter = User::find($projecteventDetail->fk_userid);
        return view('userside/projectevent/detail',compact('projecteventDetail','writter'));
    }
    public function blogsController()
    {
        $blogs = DB::table('blogs')->latest()->paginate(5);
        return view('userside/blog/blogs',compact('blogs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function blogDetailController($id)
    {
        $blogDetail = Blog::find($id);
        $writter = User::find($blogDetail->fk_userid);
        return view('userside/blog/detail',compact('blogDetail','writter'));
    }
    public function galleryController()
    {
        return view('userside/gallery/gallery');
    }
    public function storeController()
    {
        return view('userside/store');
    }
}
