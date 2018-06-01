<?php

namespace App\Http\Controllers;
use \App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
               $projects=Project::all();
       return view('projects.index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch(Auth::user()->role){
            case "technician":
                $data =  $request->all();
                $type =  $data['type'];
                $validated = "not yet";
                $id=DB::table('projects')
                        ->insertGetId(
                        [
                        'name' => $data['nom'],
                        'group' => $data['type'],
                        'zone' => $data['zone'],
                         'step'=>0,
                         'completion'=>0,
                        'year' => $data['year'],
                        
                       
                ]); 
                 break;              
                }
                $tables = Project::where('id',$id)->get();

                 return redirect('projects');
           
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
