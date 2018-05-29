@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
              
           
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tableaux Financiers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Step</th>
                    <th ></th>
                    <th ></th>
                </tr>
                @foreach($years as $year)
                <tr>
                      <h2>{{$year}}</h2> 
                   </tr>
              
                   
                    <tr>
                        <td>Projet type N</td>
                        <td>{{$year}}</td>
                         <td><a href="/show"><button class="btn btn-info">consuter</button></a></td>
                         <td><button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type I</td>
                        <td>{{$year}}</td>
                         <td><button class="btn btn-info">consuter</button></td>
                         <td><button class="btn btn-warning">modifier</button></td>
                    </tr>
                     <tr>
                        <td>Projet type H</td>
                        <td>{{$year}}</td>
                         <td><button class="btn btn-info">consuter</button></td>
                         <td><button class="btn btn-warning">modifier</button></td>
                    </tr>
                   @endforeach 
               </table>
               </div>
               </div> 
            </div>
        </div> 
@endsection
