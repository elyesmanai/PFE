@extends('layouts.main')
@section('content')
   
    {{ Form::open(array('url' => '/plan_com', 'action' => 'PlanController@create'))}}
 
		{{Form::label('name', 'Name') }} <br>
		{{Form::textarea('plan') }}

		{{Form::submit('submit')}}
	{{ Form::close() }}
   		

@endsection
