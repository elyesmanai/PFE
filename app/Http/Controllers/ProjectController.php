<?php

namespace App\Http\Controllers;
use \App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $project = New Project();
        $project->name = $request->get('nom');
        $project->zone = $request->get('zone');
        $project->group = $request->get('type');
        $project->step = 'Choix du projet';
        $project->completion = 0;
        $project->year = $request->get('year');
        $project->save();

        return redirect('home');
           
    }

     public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->get('nom');
        $project->zone = $request->get('zone');
        $project->step = $request->get('step');
        $project->completion = $request->get('completion');
        $project->year = $request->get('year');

        $project->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/home');
    }
}
