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
           <!--   <table id="example1" class="table table-bordered table-striped">
                <thead>
                
        <th></th>
        <th>Type</th>
        <th>Sous Type</th>
        <th>Action</th>
       
      </thead>
      <tbody>
       @foreach($projets as $projet)  
          <tr>
          	<td></td>
          	<td>{{$projet->type}}</td>
          	<td>{{$projet->soustype}}</td>
          	
            <td>
            	<button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
            	<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </td>
          </tr>
         @endforeach
      </tbody>
     </table>-->
     <!-- @foreach($projets as $projet)
      
      @if($projet->type==1)
      <h2 class="exampleInputEmail1">administratif</h2>
        <h4>{{$projet->soustype}}</h4>
       @elseif($projet->type==2)   
      <h2 class="exampleInputEmail1">Structuration</h2>
      <h4>{{$projet->soustype}}</h4>
        @else
     <h2 class="exampleInputEmail1"> Projets de pret </h2>
     <h4>{{$projet->soustype}}</h4>
      @endif 
      @endforeach-->
      <h2 class="exampleInputEmail1">administratif</h2>
      @foreach($projets as $projet)
      @if($projet->soustype==1)
      <h4>{{$projet->type}}</h4>
      @endif 
      @endforeach
      <h2 class="exampleInputEmail1">Structuration</h2>
      @foreach($projets as $projet)
      @if($projet->soustype==2)
      <h4>{{$projet->type}}</h4>
      @endif 
      @endforeach
      <h2 class="exampleInputEmail1">Projets de pret </h2>
      @foreach($projets as $projet)
      @if($projet->soustype==3)
      <h4>{{$projet->type}}</h4>
      @endif 
      @endforeach
    </div>
   </div>             	
@endsection