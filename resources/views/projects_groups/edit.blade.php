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
               <form method="post" action="{{action('ProjectGroupeController@update', 1)}}">
                 @csrf
    @method('PUT')   
              <table class="table table-bordered">
                <tr>
                    <th>énoncé</th>
                    <th>Montant</th>
                    <th >Plan financier </th>
                    
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>monétization interne</th>
                    <th>prét</th>
                    <th >aide</th>

                </tr>
                @foreach($tables as $table)
                
                      
                   
              
                   
                    <tr>
                     
                        <td>{{$table->type}}</td>
                        <td><input value="{{$table->total_amount}}" name="total[]"></td>
                         <td><input value="{{$table->self_monetization}}" name="self[]"></td>
                         <td><input value="{{$table->loan}}" name="loan[]"></td>
                          <td><input value="{{$table->assistance}}" name="ass[]"></td>
                    
                    </tr>
                    @endforeach
                  </table>
                  <br>
               
                  <button class="btn btn-success pull-right">Modifier</button>

                  </form>
                   <a href="/home"><button class="btn btn-info">Revenir</button></a>
                  </div>
               </div>
              </div>
             </div>  

@endsection
