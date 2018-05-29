<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ConvocationController;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the applicatlion dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTables(){
        return DB::table('technical_tables')->where('year',Date('Y'))->get();
    }

    public function getConvocations(){
        return DB::table('convocations')->where('to',Auth::id())->get();
    }

    public function getFeedbacks(){
        return DB::table('feedbacks')->where('user_id',Auth::id())->get();
    }

    public function getProjects(){
        return DB::table('users')
                ->join('projects_delegates', 'users.id', '=', 'projects_delegates.delegate_id')
                ->join('projects', 'projects.project_id', '=', 'projects_delegates.project_id')
                ->select('projects.*')
                ->where('projects_delegates.delegate_id',Auth::id())
                ->get();
    }

    public function index()
    {
        
        switch (Auth::user()->role) {
            case 'delegate':
                $convocations = $this->getConvocations();
                $convocationsNbr = $convocations->count();
                $projects = $this->getProjects();
                return view('homes.delegate')->with('convocations',$convocations)->with('convocationsNbr',$convocationsNbr)->with('projects',$projects);
                break;


            case 'civil_society':
                $feedbacks = $this->getFeedbacks();
                $convocations = $this->getConvocations();
                $convocationsNbr =  $convocations->count();
                return view('homes.civil_society')->with('convocations',$convocations)->with('convocationsNbr',$convocationsNbr);
                break;

            case 'financial':
                $tables = $this->getTables();
                $zones = $tables->pluck('zone')->unique();
                $years = $tables->pluck('year')->unique();
                return view('homes.financial')->with('years',$years)->with('tables',$tables)->with("zones",$zones);
                break;

            case 'technician':
                $tables = $this->getTables();
                $zones = $tables->pluck('zone')->unique();

                return view('homes.technician')->with('tables',$tables)->with("zones",$zones);
                break;
            case 'admin':
                $tables = $this->getTables();
                return view('homes.admin')->with('tables',$tables);
                break;
            
            default:
                # code...
                break;
        }
        
    }
}
