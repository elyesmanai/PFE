@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        Nouvelle action
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>action</a></li>
       
        <li class="active">Nouveau action</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nouvelle action</h3>
            </div>
            <div class="box-body">
<div class="row">
	
	<form method="post" action="{{url('actions')}}">
    @csrf
    <div class="col-md-6">
      <label class="exampleInputEmail1">Concerné</label>
      <input type="text" name="target" class="form-control">
    </div>
    <div class="col-md-6">
  		<label class="exampleInputEmail1">Objet</label>
  		<input type="text" name="object" class="form-control">
  	</div>
    <div class="col-md-6">
      <label class="exampleInputEmail1">Zone</label>
      <input type="text" name="zone" class="form-control">
    </div>
    <div class="col-md-6">
      <label class="exampleInputEmail1">Date limite</label>
      <input type="date" name="deadline" class="form-control">
    </div>
    

	<div class="col-md-12"><br> <button class="btn btn-success pull-right">Envoyer</button></div>
	</form>
</div>
    </div>
    </div>

@endsection
