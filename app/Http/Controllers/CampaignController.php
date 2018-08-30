<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use DB;
use App\Campaign;

class CampaignController extends Controller
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
		// 	$campaigns = DB::table('campaigns')->count();
        // }
        // else {
        //     return 'kamu bukan staff banana pirates';
        // }
        // $newss = News::latest()->paginate(5);
        $campaigns = DB::table('campaigns')->latest()->paginate(5);
        return view('campaign.index',compact('campaigns'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaign.create');
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
            'campaign_name' => 'required|max:255|string',
            'content' => 'required|max:10000|string',
            'pictures' => 'required',
            'hyperlink' => 'required'
            
            ]);
            $data = $request->only('campaign_name', 'content', 'pictures','fk_userid','hyperlink');
            // $data = $request->except(['image']);
            $pictures = "";
            if ($request->hasFile('pictures')){ //has file itu meminta nama databasenya bukan classnya
                $ip = request()->ip();
                $file = $request->pictures;
                $fileName = str_random(40) . '.' . $file->guessClientExtension();;
                $getPath = 'http://127.0.0.1:8000/bananapirates/public/img/' . $fileName;
                $destinationPath = "images/campaign";
                $data['pictures'] = $fileName;
                $file -> move($destinationPath, $getPath,$fileName);
                $photo1 = $fileName;
                // return $getPath;
            }
            $data['fk_userid'] = $id_user; 
        Campaign::create($data);
        return redirect()->route('campaign.index')
            ->with('success','New campaign has been created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaigns = Campaign::find($id);
        // $justId = $campaigns->id;
        // $this->addCategory($justId);
        // dd($campaigns);
        return view('campaign.show',compact('campaigns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaigns = Campaign::find($id);
        return view('campaign.edit',compact('campaigns'));
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
            'campaign_name' => 'required|max:255|string',
            'content' => 'required|max:10000|string',
            'hyperlink'=>'required'
            ]);
            $data = $request->only('campaign_name', 'content','hyperlink');
            
            // $data = $request->except(['image']);
            $pictures = "";
            if ($request->hasFile('pictures')){ //has file itu meminta nama databasenya bukan classnya
                $ip = request()->ip();
                $file = $request->pictures;
                $fileName = str_random(40) . '.' . $file->guessClientExtension();;
                // $getPath = 'http://127.0.0.1:8000/nareeadmin/public/img/' . $fileName;
                $destinationPath = "images/campaign";
                $data['pictures'] = $fileName;
                $file -> move($destinationPath,$fileName);

    
            }


        Campaign::find($id)->update($data);
        return redirect()->route('campaign.index')
            ->with('success','New campaign has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Campaign::find($id)->delete();
        return redirect()->route('campaign.index')
                        ->with('success','campaign has been deleted successfully');
    }
}
