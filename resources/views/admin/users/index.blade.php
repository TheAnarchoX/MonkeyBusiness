@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Alle Gebruikers
@endsection
@section('main')
    @php $carbon = new \Carbon\Carbon(); @endphp
    @if(session()->has('message'))
        @php
            $message = session()->get('message');
        @endphp
        <div class="bg-success text-white font-weight-bold text-center p-3 mb-2">
            {{$message->first('deleted')}}
        </div>
    @endif
    <a href="{{route('admin.activiteiten.create')}}" class="btn btn-block btn-success text-center text-white font-weight-bold p-4 mb-2 rounded-0">Nieuwe Activiteit</a>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr class="text-center">
            <th colspan="1000">Activiteiten</th>
        </tr>
        <tr>
            <th>UUID</th>
            <th>Naam</th>
            <th>E-Mail</th>
            <th>Bevoegdheden</th>
        </tr>
        </thead>
        @foreach($users as $user)
            @can('view', $user)
            <tr data-href="{{route('admin.gebruikers.show', $user->uuid)}}" class="clickable">
                <td>{{$user->uuid}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->location}}</td>
                <td>{{$activity->author->name}}</td>
            </tr>
            @endcan
        @endforeach
    </table>
    <div class="d-flex justify-content-center align-items-center">
    {{$activities->links()}}

@endsection
@section('scripts')
    @parent

@endsection
