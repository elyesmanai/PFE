@extends('layouts.main')
@section('content')
 <section class="content-header">
      <h1>
        Liste utilisateurs
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>utilisateurs</a></li>
       
        <li class="active">Liste utilisateurs</li>
      </ol>
    </section>
    <br>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tous les utilisateurs</h3>
              <a href="/users/create">
              <button class="btn btn-info pull-right">nouveau utilisateur</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                
        <th><input type="checkbox" id="checkall" /></th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Zone</th>
        <th>Edit</th>  
        <th>Delete</th>
      </thead>
      <tbody>
       @foreach($users as $u)  
          <tr>
          	<td><input type="checkbox" class="checkthis" /></td>
          	<td>{{$u->name}}</td>
          	<td>{{$u->email}}</td>
          	<td>{{$u->role}}</td>
            <td>{{$u->zone}}</td>
            <td>
              <p data-placement="top" data-toggle="tooltip" title="Edit">
                <a href="{{action('UserController@edit', $u->id)}}" class="edit" title="Edit" data-toggle="tooltip">
                  <i class="fa  fa-pencil"></i>
                </a>
              </p>
            </td>
            <td>
              
              <form action="{{action('UserController@destroy', $u->id)}}" method="post">
                <input type="hidden" name="id" value="{{$u->id}}">
                @csrf
                @method('Delete')
                <p data-placement="top" data-toggle="tooltip" title="Delete">
                <button class="btn btn-danger btn-xs" >
                  <span class="glyphicon glyphicon-trash"></span>
                </button>
              </p>
              </form>
            </td>
          </tr>
        @endforeach                
      </tbody> 
    </table>            
</div>

     
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> <input type="submit" value="Are you sure you want to delete this Record?"></div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
