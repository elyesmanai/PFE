@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Projets type près</h2>
                {{-- @if(!empty($tables))  --}}
                    <center>
                    <table style="font-size: 20px; border:1px solid black" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2">énoncé de projet</th>
                                <th rowspan="2">Montant</th>
                                <th colspan="3">Plan financier</th>
                            </tr>
                            <tr>
                                <th>monétization interne</th>
                                <th>prêt</th>
                                <th>aide</th>
                            </tr>

                        </thead>
                        <tbody>
                            {{--@foreach($tables as $table)--}}

                                <tr>
                                    <td>éclairage public</td>
                                    <td><input type="text" value="150"></td>
                                    <td><input type="text" value="100"</td>
                                    <td><input type="text" value="20"</td>
                                    <td><input type="text" value="30"</td>
                                </tr>
                                <tr>
                                    <td>construction</td>
                                    <td><input type="text" value="450"</td>
                                    <td><input type="text" value="150"</td>
                                    <td><input type="text" value="200"</td>
                                    <td><input type="text" value="100"</td>
                                </tr>
                                <tr>
                                    <td>rénovation</td>
                                    <td><input type="text" value="200"</td>
                                    <td><input type="text" value="100"</td>
                                    <td><input type="text" value="50"</td>
                                    <td><input type="text" value="50"</td>
                                </tr>
                                <tr>
                                    <td>goudronnement</td>
                                    <td><input type="text" value="75"</td>
                                    <td><input type="text" value="50"</td>
                                    <td><input type="text" value="25"</td>
                                    <td><input type="text" value="0"</td>
                                </tr>
                                
                              
                            {{-- @endforeach--}}
                        </tbody>
                    </table></center>
                {{--@else--}}
                    <td>Pas de tableaux pour maintenant</td>
                {{--@endif  --}}  
            </div>
        </div>
@endsection
