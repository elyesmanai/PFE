@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        modifier Rendez-vous
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rendez-vous</a></li>
       
        <li class="active">modifier Rendez-vous</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">modifier Rendez-vous</h3>
            </div>
            <div class="box-body">
<div class="row">
	<form method="post" action="{{action('AppointmentController@update', $appointment->id_appointment)}}">
         @csrf
    @method('PUT')                      

  <div class="col-md-6">
    <label class="exampleInputEmail1">Date</label>
    <input type="date" name="date" class="form-control" value="{{ $appointment->date }}">
  </div>
  <div class="col-md-6">
    <label class="exampleInputEmail1">objet</label>
    <input type="text" name="object" class="form-control" value="{{ $appointment->object }}">
  </div>
  <div class="col-md-12">
    <label class="exampleInputEmail1">Message</label>
    <textarea class="form-control" rows="3" name="message">{{ $appointment->message }}</textarea>
  </div>
@if(Auth::user()->role=="admin")
  <div class="col-md-6">
      <br>
     <select name="user" id="u">
      
       @foreach($users as $user)
        @if($user->id == $appointment->receiver_id)
          <option value="{{ $appointment->receiver_id }}">{{ $user->name }}</option>
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