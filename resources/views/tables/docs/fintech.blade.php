@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Tableau technico-financier {{ $year }}
                     <a href="/tables/{{ $type }}/{{ $year }}/generate/fr">
                    <button class="btn btn-success">Générer pdf francais</button>
                </a>
                <a href="/tables/{{ $type }}/{{ $year }}/generate/ar">
                    <button class="btn btn-success">Générer pdf arabe</button>
                </a>
                </h2>
                    <table style="font-size: 20px; border:1px solid black" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>الكلفة الجملية</th>
                                <th>المشروع</th>
                                <th>المنطقة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($zones as $zone)
                                @foreach($groups as $group)
                                
                                    @foreach($pro)
                                @endforeach
                                <tr>
                                    <th>{{ $total_amount }}</th>
                                    <th>{{ $project-> }}</th>
                                    
                                </tr>
                                <tr>
                                    <th>850.000</th>
                                    <th>قرض (صندوق القروض ومساعدة الجماعات المحلية)</th>                                 
                                </tr>
                                <tr>
                                    <th>5.108.000</th>
                                    <th>تمويل ذاتي</th>                                  
                                </tr>
                                <tr>
                                    <th>6.357.000</th>
                                    <th>الجملة</th>
                                    
                               </tr>
                              
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
@endsection
