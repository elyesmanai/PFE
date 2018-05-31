@extends('layouts.main')


@section('content')
 <div class="box">
<div class="box-body">
        <div class="row">
             
            <div class="col-lg-12">
               <h1>Projets de type près: <a href="/projects/create"><button class="btn btn-info">Ajouter projet</button></a></h1>
                    <table id="example2" class="table table-bordered table-striped">
                        <tr>
                            <th> Zone </th>
                            <th> Groupe </th>
                            <th> Nom </th>
                            <th> Etape </th>
                            <th> Accomplissement </th>
                            <th> Année </th>
                            <th> Actions </th>
                        </tr>
                        <tr>
                            <th> Marsa Erriadh </th>
                            <th> Gourdonnement </th>
                            <th> Rue Ebdellia </th>
                            <th> Début travail </th>
                            <th> 50% </th>
                            <th> 2018 </th>
                            <th> 
                                <a href="/projects/edit"><button class="btn btn-danger">Modifier</button></a>
                                <button class="btn btn-danger">Supprimer</button>
                            </th>
                        </tr>
                        <tr>
                            <th> Gammarth </th>
                            <th> éclairage public </th>
                            <th> Rue Tabek </th>
                            <th> Choix entrepreneur </th>
                            <th> 20% </th>
                            <th> 2018 </th>
                             <th> 
                                <button class="btn btn-danger">Modifier</button>
                                <button class="btn btn-danger">Supprimer</button>
                            </th>
                        </tr>
                        <tr>
                            <th> Marsa Erriadh </th>
                            <th> Rénovation </th>
                            <th> Arrondissement Saada </th>
                            <th> Diagnostic </th>
                            <th> 10% </th>
                            <th> 2018 </th>
                             <th> 
                                <button class="btn btn-danger">Modifier</button>
                                <button class="btn btn-danger">Supprimer</button>
                            </th>
                        </tr>
                        
                          
                    </table> <br><br>
            </div>
        </div> 
    </div>
  </div>  
@endsection
