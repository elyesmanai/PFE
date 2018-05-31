@extends('layouts.main')
@section('content')
<section class="content-header">
      <h1>
        Liste Projets
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Projets</a></li>
       
        <li class="active">Liste Projets</li>
      </ol>
    </section>
    <br>
<div class="box">
	<div class="box-body">
    <table class="table table-bordered table-striped">
      <tr>
          <th>Nom</th>
          <th>Type</th>
          <th>Etape</th>
          <th>Accomplissement</th>
          <th>Action</th>
      </tr>
      @foreach($projects as $project)
      <tr>
          <th>{{$project->name}}</th>
          <th>{{$project->group}}</th>
          <th>{{$project->step}}</th>
          <th>{{$project->completion}}%</th>
          <th>
            <a href="/Feedback/create?pid=">
              <a href="/feedbacks/create"><button class="btn btn-danger">Feedback</button></a>
            </a>  
          </th>
      </tr>
              @endforeach  
          </table>
    </div>
   </div>             	
@endsection