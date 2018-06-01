@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
              
           
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tableaux Financiers: </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Année</th>
                    <th>Actions</th>
                </tr>
                
                   
                    <tr>
                        <td>Projet type N</td>
                        <td>2018</td>
                         <td><a href="projectgroups"><button class="btn btn-info">consuter</button></a> &nbsp;
                      <a href="{{action('ProjectGroupeController@edit', 1)}}"> <button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type I</td>
                        <td>2018</td>
                         <td><button class="btn btn-info">consuter</button> &nbsp;<button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type H</td>
                        <td>2018</td>
                         <td><button class="btn btn-info">consuter</button> &nbsp;<button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type N</td>
                        <td>2017</td>
                         <td><a href="/show"><button class="btn btn-info">consuter</button></a> &nbsp;
                         <button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type I</td>
                        <td>2017</td>
                         <td><button class="btn btn-info">consuter</button> &nbsp;<button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type H</td>
                        <td>2017</td>
                         <td><button class="btn btn-info">consuter</button> &nbsp;<button class="btn btn-warning">modifier</button></td>
                    </tr>

               </table>
               </div>
               </div> 
            </div>
        </div> 
@endsection
