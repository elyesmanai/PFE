@extends('layouts.main')


@section('content')
<section class="content-header">
      <h1>
        Nouveau Projet
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Projet</a></li>
       
        <li class="active">Nouveau Projet</li>
      </ol>
    </section>
    <div class="box">
        <div class="row">
          
            <div class="col-md-8">
               <center>
                <form action="{{url('tableaux_tech')}} " method="post" class="form-horizontal">
                   <div class="box-body">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                     <label class="col-sm-2 control-label">Nom</label>
                     <div class="col-sm-10">
                     <input type="text" name="nom" class="form-control" id="inputEmail3"> 
                     </div>
                    </div> 
                     <br>
                     <div class="form-group"> 
                    <label class="col-sm-2 control-label">type</label>
                    <div class="col-sm-10">
                    <select name="type" class="form-control" id="inputEmail3">
                      @foreach($types as $type)
                      <option value="{{$type->type}}">{{$type->type}}</option>
                      @endforeach
                    </select>
                    </div>
                  </div>
                    <br>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Zone</label>
                    <div class="col-sm-10">
                    <select name="zone" class="form-control" id="inputEmail3">
                      <option value="Marsa Medina">Marsa Medina</option>
                      <option value="Gammarth">Gammarth</option>
                      <option value="Bhar Lazrag">Bhar Lazrag</option>
                      <option value="Sidi Daoued">Sidi Daoued</option>
                      <option value="Marsa Eriadh">Marsa Eriadh</option>
                    </select>
                  </div>
                 </div> 
                    <br>
                     <div class="form-group"> 
                     <label class="col-sm-2 control-label">Year</label>
                     <div class="col-sm-10">
                     <input type="number" name="year" placeholder="year" class="form-control" id="inputEmail3">
                     </div>  
                   </div>     
                      <br>        
                      <button class="btn btn-info" type="submit">Enregister</button> 

                    </form>
                  </div>  
                </center>
            </div>
        </div> 
      </div>

@endsection
