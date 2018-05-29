@extends('layouts.main')


@section('content')
    <section class="content-header">
      <h1>
        Liste des rendez-vous
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rendez-vous</a></li>
       
        <li class="active">Liste des rendez-vous </li>
      </ol>
    </section>
    <br>
        <div class="row">
            <div class="col-lg-12">
                <!--<h2>Tous les réunions</h2>
                @if(!empty($meetings))
                    <table class="display datatable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Where</th>
                                <th>Objet</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($meetings as $meeting)
                                <tr>
                                    <td>{{$appointments->date}}</td>
                                    <td>{{$appointments->place}}</td>
                                    <td>{{$appointments->objet}}</td>
                                    <td>
                                        <button class="btn btn-success">Afficher</button>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <td>you have no meetings</td>
                @endif    -->
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tous les rendez-vous</h3>
              <a href="/appointment/create">
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
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                              <!--  @if($meeting->Commentaire!=null)  
                                <tr style="background-color: red;">
                                 @else
                                 <tr>
                                 @endif  --> 
                                    <td>{{$appointment->date}}</td>
                                    <td>{{$appointment->objet}}</td>
                                    <td>{{$appointment->message}}</td>
                                    <td>{{$appointment->Commentaire}}</td>
                                    <td>
                                        @if($appointment->etat==0)
                                        
                                        <a href="/ok/{{$appointment->apointment_id}}">   
                                        <button class="btn btn-success">OK</button>
                                        </a>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$appointment->apointment_id}}">NO</button>
                                        <div class="modal fade" id="myModal{{$appointment->apointment_id}}" role="dialog">
                                        <div class="modal-dialog modal-sm modal-center">
                                        
                                          <!-- Modal content-->
                                         <div class="modal-content">
                                            <form action="/com" method="post">
                                                 @csrf
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Feedback</h4>
                                          </div>
                                          <div class="modal-body">

                                            <input type="hidden" name="meeting_id" value="{{$appointment->apointment_id}}">
                                            <label class="exampleInputEmail1">Comentaire</label>
                                            <br>
                                            <textarea style="min-width: 100%" class="form-control" rows="3" placeholder="Enter ..." name="com"></textarea>
                                           
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                          </div>
                                           </form>
                                        </div>
                                          
                                        </div>
                                      </div>
                                     @elseif($appointment->de==Auth::user()->id)
                                     <button class="btn btn-primary"  data-toggle="modal" data-target="#myModal1{{$appointment->apointment_id}}"> modifier</button>
                                     <button class="btn btn-danger"> Annuler</button>
                                      <div class="modal fade" id="myModal1{{$appointment->apointment_id}}" role="dialog">
                                        <div class="modal-dialog modal-md modal-center">
                                        
                                          <!-- Modal content-->
                                         <div class="modal-content">
                                            <form action="/com" method="post">
                                                 @csrf
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Modifier la Rendez-vous</h4>
                                          </div>
                                          <div class="modal-body">

                                            <input type="hidden" name="meeting_id" value="{{$appointment->apointment_id}}">
                                            <label class="exampleInputEmail1">date</label>
                                            <input type="date" name="date" value="{{$appointment->date}}">
                                            <label class="exampleInputEmail1">objet</label>
                                            <input type="text" name="date" value="{{$appointment->objet}}">
                                            <br>
                                            <label class="exampleInputEmail1">Message</label>
                                            <br>
                                            <textarea style="min-width: 100%" class="form-control" rows="3" placeholder="Enter ..." name="com">{{$appointment->message}}</textarea>
                                           
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                          </div>
                                           </form>
                                        </div>
                                          
                                        </div>
                                      </div>
                                     @else
                                     @endif   
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
