<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use DB;
use App\Blog;

class BlogsController extends Controller
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
        $user = Auth::user();
		if($user->role=='1'){
			$blogs = DB::table('blogs')->count();
        }
        else {
            return 'kamu bukan staff banana pirates';
        }
        // $newss = News::latest()->paginate(5);
        $blogs = DB::table('blogs')->latest()->paginate(5);
        return view('blog.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        request()->validate([
            'title' => 'required|max:100|string',
            'content' => 'required|max:10000|string',
            'pictures' => 'required',
            
            ]);
            $data = $request->only('title', 'content', 'pictures');
            // $data = $request->except(['image']);
            $pictures = "";
            if ($request->hasFile('pictures')){ //has file itu meminta nama databasenya bukan classnya
                $ip = request()->ip();
                $file = $request->pictures;
                $fileName = str_random(40) . '.' . $file->guessClientExtension();;
                $getPath = 'http://127.0.0.1:8000/bananapirates/public/img/' . $fileName;
                $destinationPath = "images/blog";
                $data['pictures'] = '../'. $destinationPath . '/' . $fileName;
                $file -> move($destinationPath, $getPath,$fileName);
                $photo1 = $fileName;
                // return $getPath;
            }

        blog::create($data);
        return redirect()->route('blog.index')
            ->with('success','New blog has been created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = blog::find($id);
        // $justId = $blogs->id;
        // $this->addCategory($justId);
        return view('blog.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = blog::find($id);
        return view('blog.edit',compact('blogs'));
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
            'pictures' => 'required',
            ]);
            $data = $request->only('title', 'content', 'pictures');
            
            // $data = $request->except(['image']);
            $pictures = "";
            if ($request->hasFile('pictures')){ //has file itu meminta nama databasenya bukan classnya
                $ip = request()->ip();
                $file = $request->pictures;
                $fileName = str_random(40) . '.' . $file->guessClientExtension();;
                // $getPath = 'http://127.0.0.1:8000/nareeadmin/public/img/' . $fileName;
                $destinationPath = "images/blog";
                $data['pictures'] = '../'. $destinationPath . '/' . $fileName;
                $file -> move($destinationPath,$fileName);

    
            }


        blog::find($id)->update($data);
        return redirect()->route('blog.index')
            ->with('success','New blog has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::find($id)->delete();
        return redirect()->route('blog.index')
                        ->with('success','blog has been deleted successfully');
    }
}
