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
                <h2>Tableau resources {{ $year }}
                </h2>
                {{-- @if(!empty($tables))  --}}
                    <table style="width: 100%;font-size: 20px; border:1px solid black; vertical-align: center;"  id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr  style="background-color: #B9CDE5">
                                <th>Libellé</th>
                                <th>Montant</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr style="background-color: #DBEEF4">
                                    <th>Assistance</th>
                                    <th> {{ $total_assist }}</th>
                                </tr>
                            
                            
                                <tr style="background-color: #DBEEF4">
                                    <th>Prêt</th>
                                    <th>{{ $total_loan }}</th>                                 
                                </tr>
                                <tr style="background-color: #DBEEF4">
                                    <th>Auto-financement</th>
                                    <th>{{ $total_self }}</th>                                  
                                </tr>
                                <tr style="background-color: #DBEEF4">
                                    <th>Total</th>
                                    <th>{{ $total }}</th>
                                    
                               </tr>
                              
                        </tbody>
                    </table>
              
               
            </div>
        </div>
</body>
</html>
