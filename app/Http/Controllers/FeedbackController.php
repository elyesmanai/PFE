<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Feedback;
use Storage;
use \App\User;
use Image;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role=="admin"){ $feedbacks = Feedback::all(); }
        else{
        $feedbacks = Feedback::where('sender_id',Auth::id())->orwhere('receiver_id',Auth::id())->get();
        }
        return view('feedbacks.index')->with('feedbacks',$feedbacks);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $feedback= new Feedback();
        $feedback->sender_id=Auth::id();
        $feedback->object=$request->get('object');
        $feedback->type=$request->get('type');
        $feedback->meeting_id=0;

        if(Auth::user()->role == 'admin'){
            $feedback->receiver_id=$request->get('receiver');
        } else{
            $feedback->receiver_id=User::where('role',"admin")->first()->id; 
        }

        

        $media = 0;
        $files = $request->file('image');
    
        if( $request->file('image')!=null){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {$constraint->aspectRatio();})->save( public_path('/media/' . $filename ) );
            //Image::make($image)->save( public_path('/uploads/imagepromo/' . $filename ) );
            $feedback->image = '/media/'.$filename;
        }

        $feedback->save();
        return redirect('/feedbacks');
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
        $feedback = Feedback::find($id);
        return view('feedbacks.edit')->with("feedback",$feedback);
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

        $feedback = Feedback::find($id);
        $feedback->type = $request->get('type');
        $feedback->object = $request->get('object');
        if(Auth::user()->role=="admin"){ 
            $feedback->receiver_id = $request->get('receiver');
        }
        $feedback->save();
        return redirect('/feedbacks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
    }
}
