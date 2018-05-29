@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
               <center><h1>Tableaux Techniques Par année</h1></center>
                <table border="1px solid black" width="100%">
                    <tr>
                        <th> Name </th>
                        <th> actions </th>
                    </tr>
                @foreach($years as $year)
                      <tr style="background-color: grey;"><th colspan="2">{{$year}}</th></tr>
                    @foreach($zones as $zone)
                    <tr style="background-color: lightgrey;"><th colspan="2">{{$zone}}</th></tr>
                    @foreach($tables as $table)
                        @if($table->year == $year && $table->zone == $zone)
                            <tr>
                                <th>{{$table->type}}</th>
                                <th>
                                    <a href="/tables/{{$table->id}}"><button class="btn btn-info">Afficher</button></a>
                                    <a href="/tables/{{$table->id}}/edit"><button class="btn btn-info">Modifier</button></a>
                                    @if($table->validated == "not yet")
                                        <form action="/tables/{{$table->id}}" method="post">
                                       @method('PUT')
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                      <input type="hidden" name="validation" value="en attente">
                                    <button type="submit" class="btn btn-info">Envoyer pour validation</button>
                                    </form>
                                    @else
                                    <div class="btn btn-info">{{$table->validated}}</div>
                                    @endif
                                </th>
                            </tr>
                        @endif
                    @endforeach
                    @endforeach
               @endforeach
                </table> <br><br>
            </div>
        </div> 
@endsection
