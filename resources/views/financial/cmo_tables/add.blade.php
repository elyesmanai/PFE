@extends('layouts.main')


@section('content')
        <div class="row">
            <div class="col-lg-12">
               <center>
                <form action="/tables" method="post">
                    <h1><input type="text" name="type" placeholder="type"></h1>
                    <input type="text" name="zone" placeholder="zone">
                    <input type="text" name="budget" placeholder="budget">
                    
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                      <table border="1px solid black">
                          <tr>
                            <th colspan="3">
                            <input type="year" name="year" placeholder="year"></th>
                          </tr>
                          <tr>
                            <td>
                              <input type="text" name="place" placeholder="place">
                            </td>
                            <td>
                              <input type="text" name="step" placeholder="step">
                            </td>
                            <td>
                              <input type="text" name="completion" placeholder="completion">
                            </td>
                          </tr>  
                      </table> <br><br>

                      <button class="btn btn-info" type="submit">Enregister</button> 

                    </form>
                    
                </center>
            </div>
        </div> 
        </div>
@endsection
