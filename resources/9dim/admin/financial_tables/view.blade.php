@extends('layouts.main')


@section('content')
        <div class="row data">
            <div class="col-lg-12">
               <center>
                    <form action="/tables" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                      <h1><input type="text" name="prog_type" placeholder="macheri3 9orb?"></h1>
                      <table border="1px solid black">
                         <thead>
                          <tr>
                            <th rowspan="2">bayen machrou3</th>
                            <th rowspan="2">mablagh</th>
                            <th colspan="3">khota tamwiliya</th>
                          </tr>
                          <tr>
                            <th>self money</th>
                            <th>9ardh</th>
                            <th>mouse3da</th>
                          </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td>tanwir 3oumoumi</td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                           </tr>
                           <tr>
                             <td>bine arsifa</td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                           </tr>
                           <tr>
                             <td>tourou9at</td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                           </tr>
                           <tr>
                             <td>tasrif miyeh amtar</td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                             <td><input type="text" name=""></td>
                           </tr>
                           
                         </tbody>
                      </table> <br><br>

                      <button class="btn btn-info" type="submit">Enregister</button> 

                    </form>
                    <button onclick="topdf()">pdf</button>
                    
                </center>
            </div>
        </div> 
        </div>
@endsection
