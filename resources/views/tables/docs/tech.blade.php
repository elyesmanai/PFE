@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Tableau technique {{ $year }}
                     <a href="/tables/{{ $type }}/{{ $year }}/generate/fr">
                    <button class="btn btn-success">Générer pdf francais</button>
                </a>
                <a href="/tables/{{ $type }}/{{ $year }}/generate/ar">
                    <button class="btn btn-success">Générer pdf arabe</button>
                </a>
                </h2>
                @foreach($groups as $group)
                <h2 style="align-self: center;">{{ $group }}</h2>
                <table style="font-size: 20px; border:1px solid black" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>نسبة الإنجاز</th>
                                <th>المرحلة</th>
                                <th>المكان</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                @if($project->group == $group)
                                    <tr>
                                        <th>{{ $project->completion }}</th>
                                        <th>{{ $project->step }}</th>
                                        <th>{{ $project->name }}</th>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table> 
                @endforeach  
            </div>
        </div>
@endsection
