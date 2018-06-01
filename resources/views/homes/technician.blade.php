
@extends('layouts.main')
@section('content')
 <section class="content-header">
      <h1>Liste des projets</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Projets</a></li>
        <li class="active">Liste des Projets </li>
      </ol>
    </section>
    <br>
    
     <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Projets</h3>
              <a href="/projects/create">
              <button class="btn btn-info pull-right">nouveau projet</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                           <th> Zone </th>
                            <th> Groupe </th>
                            <th> Nom </th>
                            <th> Etape </th>
                            <th> Accomplissement </th>
                            <th> Année </th>
                            <th> Actions </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                      <tr>
                        <td>{{$project->zone}}</td>
                        <td>{{$project->group}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->step}}</td>
                        <td>{{$project->completion}}</td>
                        <td>{{$project->year}}</td>
                        <td>
                        
                            <a href="{{action('ProjectController@edit', $project->id_project)}}">
                            <button class="btn btn-danger">modifier</button>
                          </a>
                        
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