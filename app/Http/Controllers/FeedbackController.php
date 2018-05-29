<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Feedback;
use Storage;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role=="admin"){
            $feedbacks = Feedback::all();
        }else{
        $feedbacks = Feedback::where('user_id',Auth::id())->get();
        return view('delegate\feedbacks\index')->with('feedbacks',$feedbacks);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delegate\feedbacks\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = 0;
        $files = $request->file('image');
        if(!empty($files)){
            foreach ($files as $file) {
                Storage::put($file->getClientOriginalName(),file_get_contents($file));
            }
            $media = 1;
        }

        DB::table('feedbacks')->insert(
            [
             'user_id' => Auth::id(),
             'content' => $request->input('content'),
             'type' => $request->input('type'),
             'hasmedia' => $media
            ]
        );
        $feedbacks = Feedback::where('user_id',Auth::id())->get();
        return view('delegate\feedbacks\index')->with('feedbacks',$feedbacks);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
