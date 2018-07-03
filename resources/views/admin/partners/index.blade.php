@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Alle Partners
@endsection
@section('main')
    @if(session()->has('message'))
        @php
            $message = session()->get('message');
        @endphp
        <div class="bg-success text-white font-weight-bold text-center p-3 mb-2">
            {{$message->first('deleted')}}
        </div>
    @endif
    <a href="{{route('admin.partners.create')}}" class="btn btn-block btn-success text-center text-white font-weight-bold p-4 mb-2 rounded-0">Nieuwe Partner</a>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr class="text-center">
            <th colspan="1000">Partners</th>
        </tr>
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Telefoon</th>
            <th>Website</th>
            <th>Auteur</th>
        </tr>
        </thead>
        @foreach($partners as $partner)
            <tr data-href="{{route('admin.partners.show', $partner->name)}}" class="clickable">
                <td>{{$partner->name}}</td>
                <td>{{$partner->email}}</td>
                <td>{{$partner->phone_number}}</td>
                <td><a href="{{$partner->website}}" target="_blank" class="text-primary"> {{$partner->website}} </a></td>
                <td>{{$partner->author->name}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center align-items-center">
        {{$partners->links()}}
    </div>
@endsection
@section('scripts')
    @parent

@endsection
