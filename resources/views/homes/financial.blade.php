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
                    <th>Actions</th>
                </tr>
                
                   
                    <tr>
                        <td>Groupes de projets type près</td>
                        <td>
                            <a href="/projectgroups/n">
                                <button class="btn btn-info">consuter</button>
                            </a>
                            <a href="/projectgroups/n/edit">
                                <button class="btn btn-info">modifier</button>
                            </a>
                        </td>
                    </tr>
                     <tr>
                        <td>Groupes de projets type Administratifs</td>
                         <td><a href="/projectgroups/a"><button class="btn btn-info">consuter</button></a><a href="/projectgroups/a/edit">
                                <button class="btn btn-info">modifier</button>
                            </a></td>
                    </tr>
                     <tr>
                        <td>Groupes de projets type structurels</td>
                         <td><a href="/projectgroups/s"><button class="btn btn-info">consuter</button></a><a href="/projectgroups/s/edit">
                                <button class="btn btn-info">modifier</button>
                            </a></td>
                    </tr>
               </table>
               </div>
               </div> 
            </div>
        </div> 
@endsection
