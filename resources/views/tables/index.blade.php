@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Tableaux resources</h2>
                {{-- @if(!empty($tables))  --}}
                    <table id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Année</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--@foreach($tables as $table)--}}
                                <tr>
                                    <th>2018</th>
                                    <th><a href="/tables/res/2018"><button class="btn btn-info">Consulter</button></a></th>
                                </tr>
                                <tr>
                                    <th>2017</th>
                                    <th><a href=""><button class="btn btn-info">Consulter</button></a></th>
                                </tr>
                                <tr>
                                    <th>2016</th>
                                    <th><a href=""><button class="btn btn-info">Consulter</button></a></th>
                                </tr>
                                <tr>
                                    <th>2015</th>
                                    <th><a href=""><button class="btn btn-info">Consulter</button></a></th>
                                </tr>
                              
                            {{-- @endforeach--}}
                        </tbody>
                    </table>
                {{--@else--}}
                    <td>Pas de tableaux pour maintenant</td>
                {{--@endif  --}}  
            </div>
        </div>
@endsection
