@extends('layouts.main')
@section('content')
   <div class="row">
            <div class="col-lg-12">
                <h2>Mes rendez-vous <a href="/appointments"><button class="btn btn-info">Tous les rendez-vous</button></a>
                <a href="/appointments/create"><button class="btn btn-success">Nouveau rendez-vous</button></h2></a> 
                
                @if(!empty($appointments))
                <table  id="example1" class="table table-bordered table-striped"> 
                    <tr>
                        <th>Date</th>
                        <th>Where</th>
                        <th>reason</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($appointments as $appointment)
                        @if($appointment->date >=  date('Y-m-d H:i:s'))
                            <tr>
                                <th>{{$appointment->date}}</th>
                                <th>{{$appointment->object}}</th>
                                <th>{{$appointment->message}}</th>
                                <th>
                                    @if($appointment->sender_id == Auth::id())
                                    <button class="btn btn-danger">Modifier</button>
                                    @endif
                                    <button class="btn btn-danger">Annuler</button>
                                    
                                </th>
                            </tr>
                          @endif
                    @endforeach
                </table>
                @else
                    <td>Vous n'avez pas de rendez-vous</td>
                @endif
            </div>
        </div> 
        <hr>   
        <div class="row">
            <div class="col-lg-12">
                <h2>Dates importantes</h2>
                
                @if(!empty($deadlines))
                <table  id="example1" class="table table-bordered table-striped"> 
                    <tr>
                        <th>Date</th>
                        <th>Where</th>
                        <th>reason</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($deadlines as $deadline)
                        @if($deadline->date >=  date('Y-m-d H:i:s'))
                            <tr>
                                <th>{{$appointment->date}}</th>
                                <th>{{$appointment->object}}</th>
                                <th>{{$appointment->message}}</th>
                            </tr>
                          @endif
                    @endforeach
                </table>
            </div>
        </div>  
@endsection
