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
                        <td>{{$table->proj_type}}</td>
                        <td>{{$table->amount}}</td>
                         <td>{{$table->self_monetization}}</td>
                         <td>{{$table->loan}}</td>
                          <td>{{$table->assistance}}</td>
                    </tr>
                    @endforeach
                  </table>
                  </div>
               </div>
              </div>
             </div>  

@endsection
