@extends('layouts.main')
@section('content')
 
    <div class="box">
    	<h2>Progretion Projets</h2>
    	<hr>
    	<br>
        <div class="row">
        	<div class="col-md-2"></div>
           <div class="col-md-8">
    @foreach($tables as $table)
<div class="clearfix">
                    <span class="pull-left">{{$table->nom}}</span>
                    <small class="pull-right">{{$table->completion}}%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-blue" style="width: {{$table->completion}}%;"></div>
                  </div>
         @endforeach
         </div>  
       </div>
     </div>           
@endsection
