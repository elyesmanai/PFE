@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
               <center><h1>Tableaux Techniques à remplir</h1></center>
               @foreach($zones as $zone)
                    <h2>{{$zone}}</h2>
                    <table border="1px solid black">
                        <tr>
                            <th> Name </th>
                            <th> Year </th>
                            <th> validated </th>
                            <th> actions </th>
                        </tr>
                        @foreach($tables as $table)
                            @if($table->zone == $zone)
                                <tr>
                                    <th>{{$table->type}}</th>
                                    <th>{{$table->year}}</th>
                                    <th></th>
                                    <th>
                                        <a href="/tables/{{$table->id}}"><button class="btn btn-info">Afficher</button></a>
                                        <a href="/tables/{{$table->id}}/edit"><button class="btn btn-info">Modifier</button></a>
                                        <button class="btn btn-info">Envoyer pour validation</button>
                                    </th>
                                </tr>
                            @endif
                        @endforeach
                    </table> <br><br>
               @endforeach
            </div>
        </div> 
@endsection
