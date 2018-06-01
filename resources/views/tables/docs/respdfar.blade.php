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
                <h2>{{ $year }} جدول الموارد
                </h2>
                {{-- @if(!empty($tables))  --}}
                    <table  style="width: 100%;font-size: 20px; border:1px solid black; vertical-align: center;" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr style="background-color: #B9CDE5">
                                <th>المبلغ</th>
                                <th>البيان</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr style="background-color: #DBEEF4">
                                    <th>{{ $total_assist }}</th>
                                    <th>مساعدة (صندوق القروض ومساعدة الجماعات المحلية) </th>
                                </tr>
                            
                            
                                <tr style="background-color: #DBEEF4">
                                    <th>{{ $total_loan }}</th>
                                    <th>قرض (صندوق القروض ومساعدة الجماعات المحلية)</th>                                 
                                </tr>
                                <tr style="background-color: #DBEEF4">
                                    <th>{{ $total_self }}</th>
                                    <th>تمويل ذاتي</th>                                  
                                </tr>
                                <tr style="background-color: #DBEEF4">
                                    <th>{{ $total }}</th>
                                    <th>الجملة</th>
                                    
                               </tr>
                              
                        </tbody>
                    </table>
              
               
            </div>
        </div>
</body>
</html>
