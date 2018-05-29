@extends('layouts.main')


@section('content')
        @if(Auth::user()->role=='admin')
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>Tableaux financiers</h2>
                        </div>
                        <div class="col-lg-1">
                            <a href="tableaux_finances/create"><button class="btn btn-success">Nouveau Tableau</button></a>
                        </div>
                    </div>    
                    <table  class="display datatable">
                    <thead>
                        <th>Year</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach($tables as $table)
                                <tr>
                                    <td>{{$table->year}}</td>
                                    <td>{{$table->prog_type}}</td>
                                    <td>
                                        <button class="btn btn-success">Afficher</button>
                                        <a href="/feedbacks/create"><button  class="btn btn-danger">Modifier</button></a>
                                        <a href="/feedbacks/create"><button  class="btn btn-danger">Supprimer</button></a>
                                        <button class="btn btn-success">Télécharger</button>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>  
                </table>
                </div>
            </div>
        @endif
@endsection
