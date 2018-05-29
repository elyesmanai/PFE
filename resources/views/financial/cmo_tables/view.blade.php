@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
               <center>
                    <h1>{{$type}}</h1>
                    <h2>{{$tables[0]->zone}}</h2>
                    <table border="1px solid black">
                        <tr>
                            @foreach($tables as $table)
                                <th colspan="3">{{$table->year}}</th>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach($tables as $table)
                                    <td>{{$table->place}}</td>
                                    <td>{{$table->step}}</td>
                                    <td>{{$table->completion}}</td>
                            @endforeach
                        </tr>  
                    </table> <br><br>
                     <a href="/tables/{{$table->id}}/edit"><button class="btn btn-info">Modifier</button> </a> 
                     <button  data-toggle="modal" data-target="#exampleModal"  class="btn btn-info">Envoyer pour validation</button> 
                </center>
            </div>
        </div> 
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Le tableau a été envoyé pour validation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
@endsection
