<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        * { font-family: DejaVu Sans, sans-serif; }
    </style>
</head>
<body>
        <div class="row">
            <div class="col-lg-12">
                <h2>Tableau technique {{ $year }}</h2>
                @foreach($groups as $group)
                <h2 style="align-self: center;">{{ $group }}</h2>
                <table style="font-size: 20px; border:1px solid black" class="display datatable table table-bordered table-striped">
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
</body>
</html>
