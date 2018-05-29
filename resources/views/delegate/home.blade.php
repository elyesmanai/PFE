@extends('layouts.main')


@section('content')
		<div class="row">
            <div class="col-lg-12">
                <h2>Mes convocations</h2>
                <table>
                    @if(!is_null($convocations))
                    <tr>
                        <th>Date</th>
                        <th>Where</th>
                        <th>reason</th>
                    </tr>
                    @foreach($convocations as $convocation)
                    	@if($convocation->convocation_time >=  date('Y-m-d H:i:s'))
	                        <tr>
	                            <th>{{$convocation->convocation_time}}</th>
	                            <th>{{$convocation->convocation_place}}</th>
	                            <th>{{$convocation->reason}}</th>
	                        </tr>
	                      @endif
                    @endforeach
                    @else
                        <td>you have no convocations</td>
                    @endif    
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               <h2>Mes projets</h2>
	        <table>
	            <tr>
	                <th>Name</th>
	                <th>Step</th>
	                <th colspan="3">Actions</th>
	            </tr>
	            @foreach($projects as $project)
	                <tr>
	                    <th>{{$project->name}}</th>
	                    <th>{{$project->step}}</th>
	                    <th colspan="3">
	                    	<a href="/projects/{{$project->project_id}}"><button class="btn btn-danger">Afficher</button></a>
	                    	<a href="/Feedback/create?pid={{$project->project_id}}"><button class="btn btn-danger">Feedback</button></a>
	                    	<a href="/Convocation/create?pid={{$project->project_id}}"><button class="btn btn-danger">Convocation</button></a>
	                    </th>
	                </tr>
	            @endforeach  
	        </table>
            </div>
        </div> 
@endsection
