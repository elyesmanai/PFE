@extends('layouts.main')


@section('content')
		<div class="row">
            <div class="col-lg-12">
                <h2>Ajouter convocation</h2>
                {{ Form::open(array('url' => '/convocations', 'action' => 'ConvocationController@store'))}}
 
    				{{Form::label('reason', 'Raison') }} <br>
    				{{Form::textarea('reason') }}

    				{{Form::submit('submit')}}
				{{ Form::close() }}
               
            </div>
        </div>
@endsection
