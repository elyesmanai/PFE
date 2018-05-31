@extends('layouts.main')
@section('content')
<section class="content-header">
      <h1>
        Nouveau projet de type près 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Projet</a></li>
      
        <li class="active">Nouveau Projet</li>
      </ol>
    </section>
    <br>
<div class="box">
<div class="row">
	<div class="col-lg-2"></div>
  	<div class="col-lg-8">
  	  <form method="POST" action="{{ url('projects') }}">
  	  	@csrf
  		<label class="exampleInputEmail1">Nom</label>
  		<input type="text" name="name" class="form-control">
      <label class="exampleInputEmail1">Type</label>
  		<select class="form-control" name="type">		
        <option value="1">éclairage public</option>
        <option value="2">goudronnement</option>
        <option value="3">rénovation</option>
      </select>
      <label class="exampleInputEmail1">Zone</label>
      <input type="text" name="zone" class="form-control">
        <br> 
          <button class="btn btn-success">Ajouter</button>
  	    <br><br><br>
  	    </form>	
  	</div>
  </div>	
</div>
@endsection