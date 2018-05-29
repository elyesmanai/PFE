@extends('layouts.main')


@section('content')
        @if(Auth::user()->role=='admin')
            <div class="row">
                <div class="col-lg-12">
                    <h2>Demandes de réunions</h2>
                    <table  class="display datatable">
                    @if(!empty($feedbacks))
                    <thead>
                        <th>Date</th>
                        <th>Where</th>
                        <th>reason</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach($convocations as $convocation)
                            @if($convocation->to == Auth::id())
                                <tr>
                                    <td>{{$convocation->convocation_time}}</td>
                                    <td>{{$convocation->convocation_place}}</td>
                                    <td>{{$convocation->reason}}</td>
                                    <td>
                                        <button class="btn btn-success">Confirmer</button>
                                        <a href="/feedbacks/create"><button  class="btn btn-danger">Refuser</button></a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    @else
                        <td>you have no convocations</td>
                    @endif    
                </table>
                </div>
            </div>
        @endif


		<div class="row">
            <div class="col-lg-12">
                @if(Auth::user()->role=='admin')
                    <h2>Toutes les convocations</h2>
                @else
                    <h2>Mes convocations</h2>
                @endif
                <table class="display datatable">
                    @if($convocationsNbr)
                    <thead>
                        <th>Date</th>
                    @if(Auth::user()->role=='admin')
                        <th>from</th>
                        <th>to</th>
                    @endif
                        <th>Where</th>
                        <th>reason</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach($convocations as $convocation)
                            @if($convocation->from == Auth::id() && Auth::user()->role=="admin")
                                <tr style="background-color: tomato;">
                            @else
                                <tr>
                            @endif
                                <td>{{$convocation->convocation_time}}</td>
                                @if(Auth::user()->role=='admin')
                                <td>{{$convocation->from}}</td>
                                <td>{{$convocation->to}}</td>
                                @endif
                                <td>{{$convocation->convocation_place}}</td>
                                <td>{{$convocation->reason}}</td>
                                <td>
                                    <button class="btn btn-success">Confirmer</button>
                                    <a href="/feedbacks/create"><button  class="btn btn-danger">Refuser</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @else
                        <td>you have no convocations</td>
                    @endif    
                </table>
            </div>
        </div>
@endsection
