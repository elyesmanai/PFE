<?php

namespace App\Http\Controllers;
use Projectgroup;
use Illuminate\Http\Request;

class ProjectGroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
         $tables=\App\Projectgroup::where('type',$type)->get();
        return view('projects_groups.show')->with('tables',$tables);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($type)
    {
        $tables=\App\Projectgroup::where('type',$type)->get();
        return view('projects_groups.edit')->with('tables',$tables);
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
        $ts=$request->get('total');
        foreach ($ts as $t => $value) {
           $projectgroup= \App\Projectgroup::find($t+1);
           $projectgroup->total_amount=$value;
           $projectgroup->save();
           
        }
        $ts=$request->get('self');
        foreach ($ts as $t => $value) {
           $projectgroup= \App\Projectgroup::find($t+1);
           $projectgroup->self_monetization=$value;
           $projectgroup->save();
           
        }
        $ts=$request->get('loan');
        foreach ($ts as $t => $value) {
           $projectgroup= \App\Projectgroup::find($t+1);
           $projectgroup->loan=$value;
           $projectgroup->save();
           
        }
        $ts=$request->get('ass');
        foreach ($ts as $t => $value) {
           $projectgroup= \App\Projectgroup::find($t+1);
           $projectgroup->assistance=$value;
           $projectgroup->save();
           $type = $projectgroup->type;           
        }
        return redirect('projectgroups/'.$type);
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
    public function editprojet()
    {

    }
}
