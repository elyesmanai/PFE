@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        Nouveau Rendez-vous
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rendez-vous</a></li>
       
        <li class="active">Nouveau Rendez-vous</li>
      </ol>
    </section>
    <br>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nouveau Rendez-vous</h3>
            </div>
            <div class="box-body">
<div class="row">
	
	<form method="post" action="{{url('appointments')}}">
         @csrf
	<div class="col-md-6">
		<label class="exampleInputEmail1">Date</label>
		<input type="date" name="date" class="form-control" id="d">
	</div>
	<div class="col-md-6">
		<label class="exampleInputEmail1">objet</label>
		<input type="text" name="object" class="form-control">
	</div>
	<div class="col-md-12">
		<label class="exampleInputEmail1">Message</label>
		<textarea class="form-control" rows="3" placeholder="Enter ..." name="message"></textarea>
	</div>
@if(Auth::user()->role=="admin")
  <div class="col-md-6">
      <br>
     <select name="user" id="u" class="form-control">
      <option value="">--</option>
       @foreach($users as $user)

       @if($user->id!=Auth::user()->id&&$user->role!="delegate")
       
       <option value="{{$user->id}}">{{$user->role}}<->{{$user->name}}</option>
       @elseif($user->id!=Auth::user()->id&&$user->role=="delegate")
       
       <option value="{{$user->id}}">{{$user->role}}<->{{$user->name}}<-><p style="color:green ;">{{$user->zone}}</p></option>
       @endif
       @endforeach
     </select>
  </div>
@endif
	<div class="col-md-12"><br> <button class="btn btn-success pull-right">Envoyer</button></div>
	</form>
</div>
    </div>
    </div>

@endsection
<script type="text/javascript">
 function chgfond()
        {
 
  var x = document.getElementById("u");
  x.style.display = "none";
  if(document.getElementById("b").checked )
  {
  
   x.style.display = "none";
  }
  else if(document.getElementById("p").checked == true)
  {
    x.style.display = "block";
  }
}
document.addEventListener("DOMContentLoaded", function() {
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

var day = yyyy+'-'+mm+'-'+dd;
   // var x = document.getElementById("myDate").min = day;
    document.getElementById('d').setAttribute("min", day);
});

</script>

