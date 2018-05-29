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
                     <button  class="btn btn-info">Confirmer</button> 
                </center>
            </div>
        </div> 
        </div>
@endsection
