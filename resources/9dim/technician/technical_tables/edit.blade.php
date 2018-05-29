@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
               <center>
                    <h1>{{$type}}</h1>
                    <h2>{{$tables[0]->zone}}</h2>
                    <form action="/tables/{{$tables[0]->id}}" method="post">
                       @method('PUT')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                      <input type="hidden" name="validation" value="en attente">
                      <table border="1px solid black">
                          <tr>
                              @foreach($tables as $table)
                              <input type="hidden" name="table_ids[]" value="{{$table->id}}">
                                  <th colspan="3">
                                    <input type="year" name="years[]" value="{{$table->year}}"></th>
                              @endforeach
                          </tr>
                          <tr>
                              @foreach($tables as $table)
                                      <td>
                                        <input type="text" name="places[]" value="{{$table->place}}">
                                      </td>
                                      <td>
                                        <input type="text" name="steps[]" value="{{$table->step}}">
                                      </td>
                                      <td>
                                        <input type="text" name="completions[]" value="{{$table->completion}}">
                                      </td>
                              @endforeach
                          </tr>  
                      </table> <br><br>

                      <button class="btn btn-info" type="submit">Enregister</button> 

                    </form>
                    
                </center>
            </div>
        </div>
@endsection
