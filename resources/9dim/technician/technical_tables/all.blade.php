@extends('layouts.main')


@section('content')
<div class="box">
    <div class="box-body">
        <div class="row">
            <div class="col-lg-12 data">
               <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Tableaux Techniques</h2>
                        </div>
                        <div class="col-lg-6">
                            <a href="/projects/create"><button class="btn btn-success pull-right">Nouveau Tableau</button></a>
                        </div>
                    </div>   
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>Nom</th> 
                  <th>Année</th>
                  <th>Etap</th>
                  <th>Type</th>
                  <th>Accomplissement</th>
                  <th>Zone</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                    @foreach($tables as $table)
                              
                                    <td>{{$table->nom}}</td>
                                    <td>{{$table->year}}</td>
                                    <td>{{$table->step}}</td>
                                    <td>{{$table->type}}</td>
                                    <td>{{$table->completion}}%</td>
                                    <td>
                                     {{$table->zone}}   
                                    </td>
                                    <td>
                                          <button class="btn btn-warning"  data-toggle="modal" data-target="#myModal1{{$table->id}}"> <i class="fa fa-pencil"></i></button>
                                     <button class="btn btn-danger"> <i class="fa fa-close"></i> </button>
                                      <div class="modal fade" id="myModal1{{$table->id}}" role="dialog">
                                        <div class="modal-dialog modal-md modal-center">
                                        
                                          <!-- Modal content-->
                                         <div class="modal-content">
                                            <form action="{{action('TechnicalTableController@update', $table->id)}}" method="post" >
                                                 @csrf
                                              @method('PUT')
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Modifier Projet</h4>
                                          </div>
                                          <div class="modal-body " >
                             
                                            
                                             <label class="col-sm-4 control-label">Nom</label>
                                             <div class="col-sm-8">
                                             <input type="text" name="nom" class="form-control" id="inputEmail3" value="{{$table->nom}}"> 
                                             </div>
                                             <br> 
                                             
                                             
                                            
                                         
                                            <label class="col-sm-4 control-label">Zone</label>
                                            <div class="col-sm-8">
                                            <select name="zone" class="form-control" id="inputEmail3" >
                                              <option value="Marsa Medina">Marsa Medina</option>
                                              <option value="Gammarth">Gammarth</option>
                                              <option value="Bhar Lazrag">Bhar Lazrag</option>
                                              <option value="Sidi Daoued">Sidi Daoued</option>
                                              <option value="Marsa Eriadh">Marsa Eriadh</option>
                                            </select>
                                          </div>
                                         

                                         
                                           <br> 
                                             <label  class="col-sm-4 control-label">Year</label>
                                             <div class="col-sm-8">
                                             <input type="number" name="year" placeholder="2018" class="form-control" id="inputEmail3" value="{{$table->year}}">
                                             </div> 
                                             <br> 
                                           <label class="col-sm-4 control-label">etap</label>
                                            <div class="col-sm-8">
                                            <select name="step" class="form-control" id="inputEmail3">
                                              <option value="préparation du processus d'admission provisoire">préparation du processus d'admission provisoire</option>
                                              <option value="L'acceptation finale a été acceptée">L'acceptation finale a été acceptée</option>
                                              <option value="La demande d'offre a été annoncée">La demande d'offre a été annoncée</option>
                                              <option value="sélection de l'entrepreneur">sélection de l'entrepreneur</option>
                                              <option value="Entrepreneur sélectionné">Entrepreneur sélectionné</option>
                                              <option value="Préparations">Préparations</option>
                                              <option value="en progès">en progès</option>
                                            </select>
                                          </div>
                                          <br> 

                                               <label class="col-sm-4 control-label">Accomplissement</label>
                                             <div class="col-sm-8">
                                             <input type="number" name="completion" min="0" max="100" placeholder="%" class="form-control" id="inputEmail3" value="{{$table->completion}}">
                                             </div> 
                                             <br> 
                                                    </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                          </div>
                                           </form>
                                        </div>
                                          
                                        </div>
                                      </div>
                                    </td>
                                </tr>
                            @endforeach
                </tbody>
                </table> <br><br>
            </div>
        </div> 
   </div>
   </div>     
@endsection
