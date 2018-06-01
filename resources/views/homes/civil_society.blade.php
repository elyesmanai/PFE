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
                        <th>Objet</th>
                        <th>Message</th>
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
	                            	<a href="{{action('AppointmentController@edit', $appointment->id_appointment)}}"><button class="btn btn-danger">Modifier</button></a>
	                            	@endif
	                            	 <a href="{{action('AppointmentController@refuse', $appointment->id_appointment)}}"><button class="btn btn-danger">Annuler</button></a>
	                            	
	                            </th>
	                        </tr>
	                      @endif
                    @endforeach
                     @if(!empty($meetings))
                        @foreach($meetings as $meeting)
                            <tr>
                                <th>{{$meeting->date}}</th>
                                <th>{{$meeting->name}}</th>
                                <th></th>
                                <th>
                                    <a href="/feedbacks/create"><button class="btn btn-danger">Envoyer feedback</button></a>
                                </th>
                            </tr>
                        @endforeach
                    @endif
                </table>
                @else
                    <td>Vous n'avez pas de rendez-vous</td>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               <h2>Plan de communication: </h2>
	        <table class="table table-bordered table-striped">
	            <tr>
	                <th>Action à faire</th>
	                <th>Zone</th>
	                <th>Date limite</th>
	                <th>Action</th>
	            </tr>
	            @foreach($comactions as $action)
	                <tr>
	                    <td>{{ $action->object }}</td>
	                  	<td>{{ $action->zone }}</td>
	                  	<th>{{ $action->deadline }}</th>
	                    <td>
	                    	@if($action->validated==1)
	                    	Validé.
	                    	@else
	                    	
	                    		<a href="/feedbacks/create"><button class="btn btn-danger">Envoyer preuve</button></a>
	                    	
	                    	@endif
	                    		
	                    </td>
	                </tr>
	           @endforeach
	        </table>
            </div>
        </div> 
@endsection
