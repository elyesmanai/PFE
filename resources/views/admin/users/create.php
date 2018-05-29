@extends('layouts.main')
@section('content')
<div class="table-responsive">
    <table id="mytable" class="table table-bordred table-striped">              
      <thead>
        <th><input type="checkbox" id="checkall" /></th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Password</th>
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
          	<td>{{$u->password}}</td>
            <td>
              <p data-placement="top" data-toggle="tooltip" title="Edit">
                <a href="{{action('UserController@edit', $u->id)}}" class="edit" title="Edit" data-toggle="tooltip">
                  <i class="material-icons">&#xE254;</i>
                </a>
              </p>
            </td>
            <td>
              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
              <form action="{{action('UserController@destroy', $u->id)}}" method="get">
                <input type="hidden" name="id" value="{{$u->id}}">
                @csrf
                @method('Delete')
              </form>
            </td>
          </tr>
        @endforeach                
      </tbody> 
    </table>            
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
          <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input class="form-control " type="text" placeholder="Mohsin">
          </div>
          <div class="form-group">
            <input class="form-control " type="text" placeholder="Irshad">
          </div>
          <div class="form-group">
            <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
            <span class="glyphicon glyphicon-ok-sign"></span> Update
          </button>
        </div>
      </div>
      <!-- /.modal-content --> 
    </div>
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

@endsection
