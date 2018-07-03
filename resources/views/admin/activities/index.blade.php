@extends('admin.admin')
@section('style')
    @parent
@endsection
@section('title')
    Activiteiten
@endsection
@section('main')
    @php $carbon = new \Carbon\Carbon(); @endphp
    @if(session()->has('message'))
        @php
            $message = session()->get('message');
        dd($message)
        @endphp
    @endif
    <a href="{{route('admin.activiteiten.create')}}" class="btn btn-block btn-success text-center text-white font-weight-bold p-4 mb-2 rounded-0">Nieuwe Activiteit</a>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr class="text-center">
            <th colspan="1000">Activiteiten</th>
        </tr>
        <tr>
            <th>Titel</th>
            <th>Doelgroep</th>
            <th>Datum</th>
            <th>Locatie</th>
            <th>Auteur</th>

        </tr>
        </thead>
        @foreach($activities as $activity)
            <tr data-href="{{route('admin.activiteiten.show', $activity->slug)}}" class="clickable">
                <td>{{preg_replace('/\([0-9]+\)/', '',$activity->title)}}</td>
                <td>{{$activity->target}}</td>
                <td>{{$activity->event_date}}</td>
                <td>{{$activity->location}}</td>
                <td>{{$activity->author->name}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center align-items-center">
        {{$activities->links()}}
    </div>
@endsection
@section('scripts')
    @parent
@endsection
