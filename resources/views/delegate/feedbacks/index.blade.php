@extends('layouts.main')


@section('content')

		<div class="row">
            <div class="col-lg-12">
                @if(Auth::user()->role=='admin')
                    <h2>Tous les feedbacks</h2>
                @else
                    <h2>Mes feedbacks</h2>
                @endif
                @if(!empty($feedbacks))
                    <table class="display datatable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Where</th>
                                <th>reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedbacks as $feedback)
                                <tr>
                                    <th>{{$feedback->type}}</th>
                                    <th>{{$feedback->content}}</th>
                                    <th>{{$feedback->created_at}}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <td>you have no feedbacks</td>
                @endif    
            </div>
        </div>
@endsection
