@extends('layouts.main')


@section('content')
		<section class="content-header">
      <h1>
        Nouveau feedback
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>feedback</a></li>
       
        <li class="active">Nouveau feedback</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nouveau feedback</h3>
            </div>
            <div class="box-body">
<div class="row">
    
    <form method="post" action="{{url('feedbacks')}}" enctype="multipart/form-data">
        @csrf
    <div class="col-md-6">
        <label class="exampleInputEmail1">Type</label>
        <select class="form-control" name="type">
            <option value="réclamation">réclamation</option>
            <option value="proposition">proposition</option>
            <option value="preuve">preuve</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="exampleInputEmail1">Objet</label>
        <input type="text" name="object" class="form-control">
    </div>

    @if(Auth::user()->role=="admin")
        <div class="col-md-6">
            <label class="exampleInputEmail1">Destinataire</label>
            <input type="text" name="receiver" class="form-control">
        </div>
    @endif
    <div class="col-md-6">
        <label class="exampleInputEmail1">Envoyer image (optionel)</label>
        <input type="file" name="image[]" multiple> 
    </div>

    <div class="col-md-12"><br> <button class="btn btn-success pull-right">Envoyer</button></div>
    </form>
</div>
    </div>
    </div>
@endsection
