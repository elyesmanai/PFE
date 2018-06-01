@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                <h2>Tableau resources 2018
                    <button class="btn btn-success">Télécharger pdf</button>
                    <button class="btn btn-success">imprimer</button>
                </h2>
                {{-- @if(!empty($tables))  --}}
                    <table style="font-size: 20px; border:1px solid black" id="example1" class="display datatable table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>المبلغ</th>
                                <th>البيان</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--@foreach($tables as $table)--}}

                                <tr>
                                    <th>399.000</th>
                                    <th>مساعدة (صندوق القروض ومساعدة الجماعات المحلية) </th>
                                    
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
                              
                            {{-- @endforeach--}}
                        </tbody>
                    </table>
                {{--@else--}}
                    <td>Pas de tableaux pour maintenant</td>
                {{--@endif  --}}  
            </div>
        </div>
@endsection
