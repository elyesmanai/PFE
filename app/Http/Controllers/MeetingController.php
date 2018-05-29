<?php

namespace App\Http\Controllers;
use \App\Meeting;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings =  \App\Meeting::where('a', Auth::user()->id)->get();
      // $meetings =  \App\Meeting::all();
        return view('admin\\all')->with('meetings',$meetings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $users=\App\User::all();
        return view('admin\\create', compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meeting= new Meeting();
        $meeting->date=$request->get('date');
        $meeting->objet=$request->get('objet');
        $meeting->message=$request->get('message');
         $meeting->etat=0;
        $meeting->de=Auth::user()->id;
        $meeting->a=$request->get('user');
        $meeting->save();
        return redirect('');
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
    public function comm(Request $request)
    {   $idee=$request->get('meeting_id');
        $meeting = Meeting::find($idee);
        $meeting->Commentaire=$request->get('com');
        $meeting->etat=2;
         $meeting->save();
        return redirect('');
    }
    public function ok(Request $request,$id)
    {   
        $meeting = Meeting::find($id);
        $meeting->etat=1;
         $meeting->save();
        return redirect('meetings');
    }
}
