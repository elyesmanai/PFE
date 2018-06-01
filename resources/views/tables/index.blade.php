@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Tableaux 
                @switch($type)
                    @case('res')
                        resources
                        @break
                    @case('fin')
                        financiers
                        @break
                    @case('tech')
                        techniques
                        @break
                    @case('fintech')
                        technico-financiers
                        @break
                    @case('eval')
                        evaluations
                        @break
                @endswitch
                </h2>
                {{-- @if(!empty($tables))  --}}
                    <table id="exemple1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Année</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($years as $year)
                                <tr>
                                    <th>{{ $year }}</th>
                                    <th>
                                        <a href="/tables/{{ $type }}/{{ $year }}"><button class="btn btn-info">Consulter</button></a>
                                        @if($type=="eval" and $year == Date("Y"))
                                        <a href="/tables/{{ $type }}/{{ $year }}"><button class="btn btn-info">Modifier</button></a>
                                        @endif
                                    </th>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table> 
            </div>
        </div>
@endsection
