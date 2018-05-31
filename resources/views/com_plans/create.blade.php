@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        Nouveau réunion
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>réunion</a></li>
       
        <li class="active">Nouveau réunion</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nouveau réunion</h3>
            </div>
            <div class="box-body">
<div class="row">
	
	<form method="post" action="{{url('meetings')}}">
         @csrf
	<div class="col-md-6">
		<label class="exampleInputEmail1">Date</label>
		<input type="date" name="date" class="form-control">
	</div>
	<div class="col-md-6">
		<label class="exampleInputEmail1">Nom</label>
		<input type="text" name="objet" class="form-control">
	</div>

	<div class="col-md-12"><br> <button class="btn btn-success pull-right">Envoyer</button></div>
	</form>
</div>
    </div>
    </div>

@endsection
