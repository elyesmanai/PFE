@extends('layouts.main')


@section('content')
 <section class="content-header">
      <h1>Liste des feedbacks</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>feedbacks</a></li>
        <li class="active">Liste des feedbacks </li>
      </ol>
    </section>
    <br>
    
     <div class="row">
            <div class="col-lg-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">feedbacks</h3>
              <a href="/feedbacks/create">
              <button class="btn btn-info pull-right">nouvelle feedback</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Envoyé le</th> 
                  <th>Type</th>
                  <th>Objet</th>
                   <th>Modifié le</th>
                   <th>action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feedback)
                      <tr>
                        <td>{{$feedback->created_at}}</td>
                        <td>{{$feedback->type}}</td>
                        <td>{{$feedback->object}}</td>
                        <td>{{$feedback->updated_at}}</td>
                        <td>
                            <a href="{{action('FeedbackController@edit', $feedback->id_feedback)}}">
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
