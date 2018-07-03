@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    {{$news->title}}
@endsection
@section('main')
    <h2 class=" font-weight-bold text-success p-3 mb-0">Nieuwsbericht: </h2>
    <h1 class="bg-success text-center font-weight-bold text-white p-3">{{$news->title}}</h1>
    <img src="{{asset('storage/'.$news->img_path)}}">
    <h4 class=" font-weight-bold text-success p-3 mb-0">Inhoud: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$news->body}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Publicatie datum: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{date_format(date_create($news->publication_date), 'd-m-Y')}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Auteur: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$news->author->name}} </h4>
    <div class="util-flex-row">
        <div class="util-flex-block text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <a href="{{route('admin.nieuws.edit', $news->slug)}}" class="btn-warning rounded-0 text-white m-0 p-5">Bewerken</a>
        </div>
        <div class="util-flex-block  text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <form action="{{route('admin.nieuws.destroy', $news->slug)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="border-0 w-100 btn-danger rounded-0 text-white m-0 p-5 " onsubmit="confirm('Weet je dit zeker?')">Verwijderen</button>
            </form>

        </div>
    </div>


@endsection
@section('scripts')
    @parent

@endsection
