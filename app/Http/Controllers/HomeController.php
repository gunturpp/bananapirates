<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepageController()
    {
        return view('homepage');
    }
    public function profileController()
    {
        return view('profile');
    }
    public function ourteamController()
    {
        return view('our-team');
    }
    public function projecteventController()
    {
        return view('project-event');
    }
    public function blogsController()
    {
        return view('blogs');
    }
    public function galleryController()
    {
        return view('gallery');
    }
    public function storeController()
    {
        return view('store');
    }
}
