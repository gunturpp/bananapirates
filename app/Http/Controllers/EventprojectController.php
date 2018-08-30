<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use DB;
use App\Eventproject;

class EventprojectController extends Controller
{
    
    public function __construct()
    {   
        // harus role admin
        $this->middleware('auth');
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
        // $user = Auth::user();
		// if($user->role=='1'){
		// 	$event_projects = DB::table('event_projects')->count();
        // }
        // else {
        //     return 'kamu bukan staff banana pirates';
        // }
        // $newss = News::latest()->paginate(5);
        $event_projects = DB::table('event_projects')->latest()->paginate(5);
        return view('eventproject.index',compact('event_projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventproject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = Auth::id();
        request()->validate([
            'title' => 'required|max:100|string',
            'content' => 'required|max:10000|string',
            'pictures' => 'required',
            'link_registration' => 'required'
            
            ]);
            $data = $request->only('title', 'content', 'pictures','fk_userid','link_registration');
            // $data = $request->except(['image']);
            $pictures = "";
            if ($request->hasFile('pictures')){ //has file itu meminta nama databasenya bukan classnya
                $ip = request()->ip();
                $file = $request->pictures;
                $fileName = str_random(40) . '.' . $file->guessClientExtension();;
                $getPath = 'http://127.0.0.1:8000/bananapirates/public/img/' . $fileName;
                $destinationPath = "images/eventproject";
                $data['pictures'] = $fileName;
                $file -> move($destinationPath, $getPath,$fileName);
                $photo1 = $fileName;
                // return $getPath;
            }
            $data['fk_userid'] = $id_user; 
        Eventproject::create($data);
        return redirect()->route('eventproject.index')
            ->with('success','New eventproject has been created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_projects = Eventproject::find($id);
        // $justId = $event_projects->id;
        // $this->addCategory($justId);
        // dd($event_projects);
        return view('eventproject.show',compact('event_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event_projects = Eventproject::find($id);
        return view('eventproject.edit',compact('event_projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        request()->validate([
            'title' => 'required|max:100|string',
            'content' => 'required|max:10000|string',
            'link_registration'=>'required'
            ]);
            $data = $request->only('title', 'content','link_registration');
            
            // $data = $request->except(['image']);
            $pictures = "";
            if ($request->hasFile('pictures')){ //has file itu meminta nama databasenya bukan classnya
                $ip = request()->ip();
                $file = $request->pictures;
                $fileName = str_random(40) . '.' . $file->guessClientExtension();;
                // $getPath = 'http://127.0.0.1:8000/nareeadmin/public/img/' . $fileName;
                $destinationPath = "images/eventproject";
                $data['pictures'] = $fileName;
                $file -> move($destinationPath,$fileName);

    
            }


        Eventproject::find($id)->update($data);
        return redirect()->route('eventproject.index')
            ->with('success','New eventproject has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Eventproject::find($id)->delete();
        return redirect()->route('eventproject.index')
                        ->with('success','eventproject has been deleted successfully');
    }
}
