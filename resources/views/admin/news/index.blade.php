@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Nieuwsberichten
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
    <a href="{{route('admin.nieuws.create')}}" class="btn btn-block btn-success text-center text-white font-weight-bold p-4 mb-2 rounded-0">Nieuw Nieuwsbericht</a>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr class="text-center">
            <th colspan="1000">Nieuwsberichten</th>
        </tr>
        <tr>
            <th>Titel</th>
            <th>Publicatie datum</th>
            <th>Auteur</th>
            <th>Aangemaakt op</th>
        </tr>
        </thead>
        @foreach($news as $newsItem)
            <tr data-href="{{route('admin.nieuws.show', $newsItem->slug)}}" class="clickable">
                <td>{{preg_replace('/\([0-9]+\)/', '',$newsItem->title)}}</td>
                <td>{{date_format(date_create($newsItem->publication_date), 'd-m-Y')}}</td>
                <td>{{$newsItem->author->name}}</td>
                <td>{{date_format(date_create($newsItem->created_at), 'd-m-Y')}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center align-items-center">
        {{$news->links()}}
    </div>
@endsection
@section('scripts')
    @parent

@endsection
