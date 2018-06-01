<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    <title></title>
    <style>
        * { font-family: DejaVu Sans, sans-serif; }
    </style>
</head>
<body>
		<div class="row">
            <div class="col-lg-12">
                 <h2>Tableau financier de l'année {{ $year }} </h2>

                {{-- @if(!empty($tables))  --}}
                    <center>
                    <table style="font-size: 20px; border:1px solid black; vertical-align: center;" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr style="background-color: #B9CDE5">
                                <th colspan="3">Libellé projet</th>
                                <th rowspan="2">Cout</th>
                                <th rowspan="2">Plan de financement</th>
                            </tr>
                            <tr>
                                <th style="background-color: #D7E4BD">
                                    Assistance
                                </th>
                                <th style="background-color: #FCD5B5">
                                    Prêt
                                </th>
                                <th style="background-color: #F2DCDB">  
                                    Auto-financement
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($groups as $group)
                               <tr>
                                   <td style="background-color: #D7E4BD">{{ $group->assistance }}</td>
                                    <td style="background-color: #FCD5B5">{{ $group->loan }}</td>
                                    <td style="background-color: #F2DCDB">{{ $group->self_monetization  }}</td>
                                    <td style="background-color: #DBEEF4">{{ $group->total_amount}}</td>
                                    <td style="background-color: #DBEEF4">{{ $group->name }}</td>
                               </tr>
                            @endforeach
                            <tr>
                                <td style="background-color: #D7E4BD"></td>
                                <td style="background-color: #FCD5B5"></td>
                                <td style="background-color: #F2DCDB"></td>
                                <td style="background-color: #DBEEF4"></td>
                                <td style="background-color: #DBEEF4">Total</td>
                            </tr>
                        </tbody>
                    </table></center>
            </div>
        </div>
</body>
</html>
