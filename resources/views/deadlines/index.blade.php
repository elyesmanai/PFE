@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>Liste des dates limites</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>dates limites</a></li>
        <li class="active">Liste des dates limites </li>
      </ol>
    </section>
    <br>
    
     <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">dates limites</h3>
              <a href="/deadlines/create">
              <button class="btn btn-info pull-right">nouvelle date limite</button></a>
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
                    @foreach($deadlines as $deadline)
                      <tr>
                        <td>{{$deadline->date}}</td>
                        <td>{{$deadline->name}}</td>
                        <td>
                          <a href="{{action('DeadlineController@edit', $deadline->id_deadline)}}">
                            <button class="btn btn-danger">modifier</button>
                          </a>
                          <form style="display: inline-block;" action="{{action('DeadlineController@destroy',$deadline->id_deadline)}}" method="post">
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
