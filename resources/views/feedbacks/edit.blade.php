@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        modifier feedback
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>feedback</a></li>
       
        <li class="active">modifier feedback</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">modifier feedback</h3>
            </div>
            <div class="box-body">
<div class="row">
	
	<form method="post" action="{{action('FeedbackController@update', $feedback->id_feedback)}}" >
    @csrf
    @method('PUT')                      
	  <div class="col-md-6">
        <label class="exampleInputEmail1">Type</label>
        <select class="form-control" name="type" value="{{ $feedback->type }}">
            <option value="réclamation">réclamation</option>
            <option value="proposition">proposition</option>
            <option value="preuve">preuve</option>
        </select>
    </div>
	<div class="col-md-6">
		<label class="exampleInputEmail1">Objet</label>
		<input type="text" name="object" class="form-control" value="{{ $feedback->object }}">
	</div>
 @if(Auth::user()->role=="admin")
  <div class="col-md-6">
      <br>
     <select name="receiver" id="u">
      
       @foreach($users as $user)
        @if($user->id == $feedback->receiver_id)
          <option value="{{ $feedback->receiver_id }}">{{ $user->name }}</option>
        @endif
       @if($user->id!=Auth::user()->id)
       
       <option value="{{$user->id}}">{{$user->name}}</option>
       @endif
       @endforeach
     </select>
  </div>
@endif

	<div class="col-md-12"><br> <button class="btn btn-success pull-right">Envoyer</button></div>
	</form>
</div>
    </div>
    </div>

@endsection

    
