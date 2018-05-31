@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>Liste des Actions de communication</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Actions de communication</a></li>
        <li class="active">Liste des Actions de communication </li>
      </ol>
    </section>
    <br>
    
     <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Actions de communication</h3>
              <a href="/actions/create">
              <button class="btn btn-info pull-right">nouvelle Action de communication</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Objet</th> 
                  <th>Concerné</th>
                  <th>Date limite</th>
                  <th>Statut</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($actions as $action)
                      <tr>
                        <td>{{$action->object}}</td>
                        <td>{{$action->target_id}}</td>
                        <td>{{$action->deadline}}</td>
                        <td>{{$action->validated}}</td>
                        <td>
                          <a href="{{action('ComactionController@edit', $action->id_action)}}"
                            <button class="btn btn-danger">modifier</button>
                          </a>
                           <form style="display: inline-block;" action="{{action('ComactionController@destroy',$action->id_action)}}" method="post">
                            @csrf
                            @method('Delete')
                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger">Supprimer</button>
                            </p>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
                </div>

                <!-- fin-->
            </div>
    </div>
@endsection
