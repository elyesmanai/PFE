@extends('layouts.main')
@section('content')
<section class="content-header">
      <h1>
        Nouveau Type de projet 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Type Projet</a></li>
       
        <li class="active">Nouveau Type</li>
      </ol>
    </section>
    <br>
<div class="box">
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
	  <form method="POST" action="{{ url('projets') }}">
	  	@csrf
		<label class="exampleInputEmail1">Nom</label>
		<input type="text" name="type" class="form-control">
        <label class="exampleInputEmail1">Categorie</label>
		<select class="form-control" name="soustype">
			
         <option value="1">administratif</option>
         <option value="2">Structuration</option>
         <option value="3">Projets de pret</option>
         
         
        </select>
        <br> 
        <button class="btn btn-success">Ajouter</button>
	    <br>
	    </form>	
	</div>

</div>	
</div>
@endsection