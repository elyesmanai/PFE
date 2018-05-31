@extends('layouts.main')
@section('content')
  
  <center style="padding-top: 20%">
   {{ Form::open(array('url' => '/users/'.Auth::id(), 'method' => 'put','action' => 'UserController@update'))}}
                    {{Form::label('email', 'Email') }} 
                    {{Form::text('email', $user->email) }} <br><br>
                    {{Form::label('pass', 'Mot de passe') }}
                    {{Form::text('pass') }} <br>
                    {{Form::submit('submit')}}
   {{ Form::close() }}
   </center>
@endsection
