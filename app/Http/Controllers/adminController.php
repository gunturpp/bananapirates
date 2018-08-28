<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventproject;
use App\Blog;
use DB;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function dashboardController()
    {
        $user = Auth::user();
		if($user->role=='1'){
            $blogs = DB::table('blogs')->count();
            $event_projects = DB::table('event_projects')->count();
        }
        else {
            return 'kamu bukan admin :p';
            
        }
        return view('admin/dashboard', compact('blogs','event_projects'));        
    }
}
