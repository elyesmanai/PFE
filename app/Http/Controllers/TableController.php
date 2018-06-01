<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Project;
use App\Projectgroup;
use App\Evaltable;
use PDF;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $years = Projectgroup::all()->pluck('year')->unique();
        return view('tables.index')->with('years',$years)->with('type',$name);
    }

     public function show($name,$year)
    {

        switch ($name) {
            case 'fin':
                $groups = Projectgroup::where('year',$year)->get();
                $total = $groups->pluck('total_amount')->sum();
                return view('tables.docs.fin')->with('year',$year)->with('groups',$groups)->with('type',$name)->with('total',$total);
                break;
            case 'res':
                $groups = Projectgroup::where('year',$year);
                $total_self = $groups->pluck('self_monetization')->sum();
                $total_loan = $groups->pluck('loan')->sum();
                $total_assist = $groups->pluck('assistance')->sum();
                $total = $total_assist + $total_loan + $total_self;
                return view('tables.docs.res')->with('year',$year)->with('total',$total)->with('total_self',$total_self)->with('total_loan',$total_loan)->with('total_assist',$total_assist)->with('type',$name);
                break;
            case 'tech':
                $projects=Project::where('year',$year)->get();
                $groups = $projects->pluck("group")->unique();
                return view('tables.docs.tech')->with('type',$name)->with('year',$year)->with('projects',$projects)->with('groups',$groups);
                break;

            case 'fintech':
                $projects=Project::where('year',$year);
                $groups = $projects->pluck("group")->unique();
                $zones = $projects->pluck('zone')->unique();
                return view('tables.docs.fintech')->with('type',$name)->with('year',$year)->with('projects',$projects)->with('groups',$groups)->with('zones',$zones);
                break;

            case 'eval':
                $table = EvalTable::where('year',$year);
                return view('tables.docs.eval.show');
                break;    
            default:
                # code...
                break;
        }
        
    }

    public function generate($name,$year,$lang){

        if($lang=="ar"){
            return redirect('http://api.pdflayer.com/api/convert?access_key=4a008e98ad085ad31fd8fb2f9d46c3e4&document_name='.$name.$year.'ar.pdf&document_url=http://bc85b615.ngrok.io/docs/'.$name.'/'.$year);
        }else{

        switch ($name) {
            case 'fin':
                    $groups = Projectgroup::where('year',$year)->get();
                    $data = [
                        'groups' => $groups,
                        'type' => $name,
                        'year' => $year
                    ];
                    $pdf = PDF::loadView('tables.docs.finpdffr', $data);
                    return $pdf->download('finance'.$year.'fr.pdf');
                
                break;
            case "tech":
                    $projects = Project::where('year',$year)->get();
                    $groups = Projectgroup::where('year',$year)->get();
                    $data = [
                        'projects' => $projects,
                        'groups' => $groups,
                        'type' => $name,
                        'year' => $year
                    ];
                    $pdf = PDF::loadView('tables.docs.techpdffr', $data);
                    return $pdf->download('technique'.$year.'fr.pdf');

            case 'res':
                $groups = Projectgroup::where('year',$year);
                $total_self = $groups->pluck('self_monetization')->sum();
                $total_loan = $groups->pluck('loan')->sum();
                $total_assist = $groups->pluck('assistance')->sum();
                $total = $total_assist + $total_loan + $total_self;
                
                $data = [
                    'total_self'=> $total_self,
                    'total_loan'=>$total_loan,
                    'total_assist'=>$total_assist,
                    'total'=>$total,
                    'year'=>$year
                ];
                $pdf = PDF::loadView('tables.docs.respdffr', $data);
                return $pdf->download('res'.$year.'fr.pdf');

                break;
            default:
                # code...
                break;
        }
    }
    }

}
