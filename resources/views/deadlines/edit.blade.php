@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        modifier date limite
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>date limite</a></li>
       
        <li class="active">modifier date limite</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">modifier date limite</h3>
            </div>
            <div class="box-body">
<div class="row">
	
	<form method="post" action="{{action('DeadlineController@update', $deadline->id_deadline)}}" >
    @csrf
    @method('PUT')                      
	<div class="col-md-6">
		<label class="exampleInputEmail1">Date</label>
		<input type="date" name="date" class="form-control" value="{{ $deadline->date }}">
	</div>
	<div class="col-md-6">
		<label class="exampleInputEmail1">Nom</label>
		<input type="text" name="name" class="form-control" value="{{ $deadline->name }}">
	</div>


	<div class="col-md-12"><br> <button class="btn btn-success pull-right">Envoyer</button></div>
	</form>
</div>
    </div>
    </div>

@endsection
