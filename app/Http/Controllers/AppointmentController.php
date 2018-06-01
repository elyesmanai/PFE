<?php

namespace App\Http\Controllers;
use \App\Appointment;
use \App\Meeting;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $newappointments= Appointment::where('receiver_id', Auth::id())
        ->orwhere('sender_id', Auth::id())
        ->where([
            ['status','=',"en attente"],
            ['date','>=', date('Y-m-d')],
        ])->get()->reverse();

        $oldappointments= Appointment::where('receiver_id', Auth::id())
        ->orwhere('sender_id', Auth::id())
        ->where('date','<', date('Y-m-d'))
        ->where('status', "<>", "accepté")
        ->get();
               
        return view('appointments.index')->with('newappointments',$newappointments)->with('oldappointments',$oldappointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if(Auth::user()->role=="admin"){
            $users=User::all();
            return view('appointments.create', compact("users"));
        } 
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment= new Appointment();
        $appointment->date=$request->get('date');
        $appointment->object=$request->get('object');
        $appointment->message=$request->get('message');
        $appointment->status="en attente";
        $appointment->sender_id=Auth::id();

        if(Auth::user()->role == 'admin'){
            $appointment->receiver_id=$request->get('user');
        } else{
            $appointment->receiver_id=User::where('role',"admin")->first()->id;     
        }
       
        $appointment->save();
        return redirect('appointments');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = appointment::find($id);
        if(Auth::user()->role=="admin"){
            $users=User::all();
            return view('appointments.edit')->with("users",$users)->with("appointment",$appointment);
        } 
        return view('appointments.edit')->with('appointment',$appointment);
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
        $appointment = Appointment::find($id);
        $appointment->date=$request->get('date');
        $appointment->object=$request->get('object');
        $appointment->message=$request->get('message');

        if(Auth::user()->role == 'admin'){
            $appointment->receiver_id=$request->get('user');
        } else{
            $appointment->receiver_id=User::where('role',"admin")->first()->id; 
        }

        $appointment->save();
        return redirect('/appointments');
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
    {   $idee=$request->get('apointment_id');
        $appointments = Appointment::find($idee);
        $appointments->Commentaire=$request->get('com');
        $appointments->etat=2;
         $appointments->save();
        return redirect('appointment');
    }

    public function accept($id)
    {   
        $appointments = Appointment::find($id);
        $appointments->status="accepté"; //accepted
        $appointments->save();
        return redirect('/appointments');
    }

    public function refuse($id)
    {   
        $appointments = Appointment::find($id);
        $appointments->status="refusé"; //refused
        $appointments->save();
        return redirect('/appointments');
    }
}
?>