<?php

namespace App\Http\Controllers;
use \App\Appointment;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments =  \App\Appointment::where('a', Auth::user()->id)->get();
      // $meetings =  \App\Meeting::all();
        return view('admin\appointment\all')->with('appointments',$appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $users=\App\User::all();
        return view('admin\appointment\create', compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointments= new Appointment();
        $appointments->date=$request->get('date');
        $appointments->objet=$request->get('objet');
        $appointments->message=$request->get('message');
        $appointments->etat=0;
        $appointments->de=Auth::user()->id;
        $appointments->a=$request->get('user');
        $appointments->save();
        return redirect('appointment');
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
    {   $idee=$request->get('apointment_id');
        $appointments = Appointment::find($idee);
        $appointments->Commentaire=$request->get('com');
        $appointments->etat=2;
         $appointments->save();
        return redirect('appointment');
    }
    public function ok(Request $request,$id)
    {   
        $appointments = Appointment::find($id);
        $appointments->etat=1;
        $appointments->save();
        return redirect('appointment');
    }
}
?>