<?php

namespace App\Http\Controllers;
use \App\TechTable;
use \App\Typeprojet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TechnicalTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = TechTable::all();
        $zones = $tables->pluck('zone')->unique();
        $years = $tables->pluck('year')->unique();
       
        return view('technician.technical_tables.all')->with('tables',$tables)->with("zones",$zones)->with('years',$years);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         switch(Auth::user()->role){
            case "technician":
                $types=Typeprojet::all(); 
                return view('technician/technical_tables/add')->with('types',$types);
            
        }
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
                $id=DB::table('technical_tables')
                        ->insertGetId(
                        [
                        'nom' => $data['nom'],
                        'type' => $data['type'],
                        'zone' => $data['zone'],
                         'step'=>0,
                         'completion'=>0,
                        'year' => $data['year'],
                        
                        'validated' => $validated,
                ]); 
                 break;              
                }
                $tables = TechTable::where('id',$id)->get();

                 return redirect('/tableaux_tech');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        switch(Auth::user()->role){
            case "technician":
                $table = TechTable::where('id',$id)->get();
                $type = $table->pluck('type')[0];
                

                $tables = TechTable::where('type',$type)->where('zone',$table->pluck('zone'))->get();
                 return view('technician/technical_tables/view')->with('tables',$tables->reverse())->with('type',$type);
            break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         switch(Auth::user()->role){
            case "technician":
                $table = TechTable::where('id',$id)->get();
                $type = $table->pluck('type')[0];
                

                $tables = TechTable::where('type',$type)->where('zone',$table->pluck('zone'))->get();
                 return view('technician/technical_tables/edit')->with('tables',$tables->reverse())->with('type',$type);
            break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, $id)
    {
         switch(Auth::user()->role){
            case "technician":
                 $data =  $request->all();
                 if(!is_null($data['validation'])){
                    DB::table('technical_tables')
                        ->where('id',$id)
                        ->update(['validated'=> $data['validation']]);
                        return redirect("tables");
                }else{

                for($i=0;$i<count($data['table_ids']);$i++){
                    DB::table('technical_tables')
                        ->where('id', $data['table_ids'][$i] )
                        ->update([
                            'year' => $data['years'][$i],
                            'place' => $data['places'][$i],
                            'step' => $data['steps'][$i],
                            'completion'=> $data['completions'][$i]
                        ]);
                }
            }
                 $table = TechTables::where('id',$id)->get();
                $type = $table->pluck('type')[0];
                $tables = TechTables::where('type',$type)->where('zone',$table->pluck('zone'))->get();


                 return view('technician/technical_tables/edit')->with('tables',$tables->reverse())->with('type',$type);
            break;
        }
    }
 */
    public function update(Request $request, $id)
    {
      $table=TechTable::find($id) ;
        $table->nom=$request->get('nom');
        $table->zone=$request->get('zone');
        $table->year=$request->get('year');
        $table->step=$request->get('step');
        $table->completion=$request->get('completion');
        $table->save();
        return redirect('/tableaux_tech');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = TechTables::find($id);
        $table->delete();
        return redirect()->action('TechTableController@index');
    }
}
