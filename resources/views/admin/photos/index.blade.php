@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Alle Foto's
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
    <a href="{{route('admin.fotos.create')}}" class="btn btn-block btn-success text-center text-white font-weight-bold p-4 mb-2 rounded-0">Foto uploaden</a>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr class="text-center">
            <th colspan="1000">Partners</th>
        </tr>
        <tr>
            <th>Titel</th>
            <th>Bestand</th>
            <th>Auteur</th>
        </tr>
        </thead>
        @foreach($photos as $photo)
            <tr data-href="{{route('admin.fotos.show', $photo->slug)}}" class="clickable">
                <td>{{$photo->title}}</td>
                <td><a href="{{asset('storage/'.$photo->img_path)}}">{{$photo->img_path}}</a></td>
                <td>{{$photo->author->name}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center align-items-center">
        {{$photos->links()}}
    </div>
@endsection
@section('scripts')
    @parent

@endsection
