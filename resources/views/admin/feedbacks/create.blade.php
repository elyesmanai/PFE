@extends('layouts.main')


@section('content')
		<div class="row">
            <div class="col-lg-12">
                <h2>Ajouter feedback</h2>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error) 
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul> 
                    </div>
                @endif
                 {{ Form::open(array('url' => '/feedbacks', 'action' => 'ConvocationController@store', ))}}
                    {{Form::label('type', 'Type') }}
                    {{Form::select('type', array('L' => 'réclamation', 'S' => 'proposition'), 'S')}}

                    {{Form::label('content', 'Contenu du message') }}
                    {{Form::text('content') }}

                    {{Form::file('image')}}
                    
                    {{Form::submit('submit')}}
                {{ Form::close() }}
            </div>
        </div>
@endsection
