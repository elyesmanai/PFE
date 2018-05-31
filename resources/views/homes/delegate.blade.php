@extends('layouts.main')


@section('content')
		<div class="row">
            <div class="col-lg-12">
                <h2>Mes rendez-vous <a href="/appointments"><button class="btn btn-info">Tous les rendez-vous</button></a>
                <a href="/appointments/create"><button class="btn btn-success">Nouveau rendez-vous</button></h2></a> 
                
                @if(!empty($appointments))
                <table  id="example1" class="table table-bordered table-striped"> 
                    <tr>
                        <th>Date</th>
                        <th>Where</th>
                        <th>reason</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($appointments as $appointment)
                    	@if($appointment->date >=  date('Y-m-d H:i:s'))
	                        <tr>
	                            <th>{{$appointment->date}}</th>
	                            <th>{{$appointment->object}}</th>
	                            <th>{{$appointment->message}}</th>
	                            <th>
	                            	@if($appointment->sender_id == Auth::id())
	                            	<button class="btn btn-danger">Modifier</button>
	                            	@endif
	                            	<button class="btn btn-danger">Annuler</button>
	                            	
	                            </th>
	                        </tr>
	                      @endif
                    @endforeach
                </table>
                @else
                    <td>Vous n'avez pas de rendez-vous</td>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               <h2>Mes projets</h2>
	        <table class="table table-bordered table-striped">
	            <tr>
	                <th>Nom</th>
	                <th>Type</th>
	                <th>Etape</th>
	                <th>Accomplissement</th>
	                <th>Action</th>
	            </tr>
	            @foreach($projects as $project)
	                <tr>
	                    <th>{{$project->name}}</th>
	                    <th>{{$project->group}}</th>
	                    <th>{{$project->step}}</th>
	                    <th>{{$project->completion}}%</th>
	                    <th>
	                    	<a href="/Feedback/create?pid=">
	                    		<a href="/feedbacks/create"><button class="btn btn-danger">Feedback</button></a>
	                    	</a>	
	                    </th>
	                </tr>
	            @endforeach  
	        </table>
            </div>
        </div> 
@endsection
