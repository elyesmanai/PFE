@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>Liste des rendez-vous</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rendez-vous</a></li>
        <li class="active">Liste des rendez-vous </li>
      </ol>
    </section>
    <br>
    
     <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Demandes de rendez-vous</h3>
              <a href="/appointments/create">
              <button class="btn btn-info pull-right">nouveau rendez-vous</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th> 
                  <th>Objet</th>
                  <th>Message</th>
                  <th>Commentaire</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($newappointments as $appointment)
                      <tr>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->object}}</td>
                        <td>{{$appointment->message}}</td>
                        <td>{{$appointment->Comment}}</td>
                        @if($appointment->sender_id == Auth::id())
                          <td>
                          <a href="{{action('AppointmentController@edit', $appointment->id_appointment)}}">
                            <button class="btn btn-danger">modifier</button>
                          </a>
                          </td>
                          <td>
                            <a href="{{action('AppointmentController@refuse', $appointment->id_appointment)}}">
                            <button class="btn btn-danger">Annuler</button>
                          </a>
                          </td>
                        @else
                          <td>
                            <a href="{{action('AppointmentController@accept', $appointment->id_appointment)}}">
                            <button class="btn btn-success">Accepter</button>
                          </a>
                          </td>
                          <td>
                            <a href="{{action('AppointmentController@refuse', $appointment->id_appointment)}}">
                            <button class="btn btn-danger">Annuler</button>
                          </a>
                          </td>
                        @endif
                      </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
                </div>

                <!-- fin-->
            </div>
    </div>

    <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tous les rendez-vous</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th> 
                  <th>Objet</th>
                  <th>Message</th>
                  <th>Commentaire</th>
                  <th>Statut</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($oldappointments as $appointment)
                      <tr>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->object}}</td>
                        <td>{{$appointment->message}}</td>
                        <td>{{$appointment->Comment}}</td>
                        <td>{{ $appointment->status }}</td>
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
