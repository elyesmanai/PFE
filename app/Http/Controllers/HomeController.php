<?php

namespace App\Http\Controllers;
use \App\Project;
use \App\Meeting;
use \App\Comaction;
use \App\Projectgroup;
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
         DB::table('technical_tables')->where('year',Date('Y'))->get();
    }

    public function getappointments(){
        return DB::table('appointments')->where('receiver_id',Auth::id())->where('date','>=', Date('Y-m-d'))->where('status','accepté')->orWhere('sender_id',Auth::id())->where('date','>=', Date('Y-m-d'))->where('status','accepté')->get();

    }

    public function getFeedbacks(){
        return DB::table('feedbacks')->where('sender_id',Auth::id())->orWhere('receiver_id',Auth::id())->get();
    }

    public function getProjects(){
        return DB::table('projects')->where('zone',Auth::user()->zone)->get();
    }
    public function getMeetings(){
        return  Meeting::where('date','>=', Date('Y-m-d'))->get();
    }
    public function index()
    {
        
        switch (Auth::user()->role) {
            case 'delegate':
                $appointments = $this->getappointments();
                $projects = $this->getProjects();
                $meetings = $this->getMeetings();
                return view('homes.delegate')->with('appointments',$appointments)->with('projects',$projects)->with('meetings',$meetings);
                break;


            case 'civil_society':
                $appointments = $this->getappointments();
                $meetings = $this->getMeetings();
                $comactions = Comaction::where('target_id',Auth::id())->get();
                return view('homes.civil_society')->with('meetings',$meetings)->with('comactions',$comactions)->with('appointments',$appointments);
                break;

            case 'financial':
                return view('homes.financial');
                break;

            case 'technician':

                    $projects=Project::all();
      
                return view('homes.technician')->with('projects',$projects);
                break;
            case 'admin':
                $appointments = $this->getappointments();
                $projects = $this->getProjects();
                $meetings = $this->getMeetings();
                return view('homes.admin')->with('appointments',$appointments)->with('projects',$projects)->with('meetings',$meetings);
                break;
            
            default:
                # code...
                break;
        }
        
    }
}
