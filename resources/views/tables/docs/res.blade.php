@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Tableau resources {{ $year }}
                     <a href="/tables/{{ $type }}/{{ $year }}/generate/fr">
                    <button class="btn btn-success">Générer pdf francais</button>
                </a>
                <a href="/tables/{{ $type }}/{{ $year }}/generate/ar">
                    <button class="btn btn-success">Générer pdf arabe</button>
                </a>
                </h2>
                {{-- @if(!empty($tables))  --}}
                    <table style="font-size: 20px; border:1px solid black" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="background-color:#B9CDE5">المبلغ</th>
                                <th style="background-color:#B9CDE5">البيان</th>
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
@endsection
