<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deadline;

class DeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deadlines = Deadline::all();
        return view('deadlines.index')->with('deadlines',$deadlines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deadlines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deadline = New Deadline();
        $deadline->name = $request->get('name');
        $deadline->date = $request->get('date');
        $deadline->save();
        return redirect('/deadlines');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$deadline = Deadline::find($id);
        return view('deadlines.edit')->with("deadline",$deadline);
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
    	$deadline = Deadline::find($id);
        $deadline->name = $request->get('name');
        $deadline->date = $request->get('date');
        $deadline->save();
        return redirect('/deadlines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deadline = Deadline::find($id);
        $deadline->delete();
        return redirect('/deadlines');
    }
}
