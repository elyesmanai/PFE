@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>Liste des réunions</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Réunions</a></li>
        <li class="active">Liste des réunions </li>
      </ol>
    </section>
    <br>
    
     <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Réunions</h3>
              <a href="/meetings/create">
              <button class="btn btn-info pull-right">nouvelle réunion</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th> 
                  <th>nom</th>
                  <th>actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($meetings as $meeting)
                      <tr>
                        <td>{{$meeting->date}}</td>
                        <td>{{$meeting->name}}</td>
                        <td>
                           <a href="{{action('MeetingController@edit', $meeting->id_meeting)}}">
                            <button class="btn btn-danger">modifier</button>
                          </a>
                          <form style="display: inline-block;" action="{{action('MeetingController@destroy',$meeting->id_meeting)}}" method="post">
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
