<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comaction;

class ComactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = Comaction::all();
        return view('actions.index')->with('actions',$actions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action = New Comaction();
        $action->object = $request->get('object');
        $action->target_id = $request->get('target');
        $action->deadline = $request->get('deadline');
        $action->zone = $request->get('zone');
        $action->validated = 0;
        $action->save();
        return redirect('/actions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = Comaction::find($id);
        return view('actions.edit')->with("action",$action);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = Comaction::find($id);
        return view('actions.edit')->with("action",$action);
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
        $action = Comaction::find($id);
        $action->object = $request->get('object');
        $action->target_id = $request->get('target');
        $action->deadline = $request->get('deadline');
        $action->zone = $request->get('zone');
        $action->save();
        return redirect('/actions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action = Comaction::find($id);
        $action->delete();
        return redirect('/actions');
    }
}
