@extends('admin.admin')
@section('styles')
    @parent
@endsection
@section('title')
    Foto: {{$photo->title}}
@endsection
@section('main')
       <h2 class=" font-weight-bold text-success p-3 mb-0">Foto: </h2>
    <h1 class="bg-success text-center font-weight-bold text-white p-3">{{$photo->title}}</h1>
    <img src="{{asset('storage/'.$photo->img_path)}}">
    <h4 class=" font-weight-bold text-success p-3 mb-0">Beschrijving: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$photo->description}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Auteur: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$photo->author->name}} </h4>
    <div class="util-flex-row">
        <div class="util-flex-block text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <a href="{{route('admin.fotos.edit', $photo->slug)}}" class="btn-warning rounded-0 text-white m-0 p-5">Bewerken</a>
        </div>
        <div class="util-flex-block  text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <form action="{{route('admin.fotos.destroy', $photo->slug)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit"  class="border-0 w-100 btn-danger rounded-0 text-white m-0 p-5 " onsubmit="confirm('Weet je dit zeker?')">Verwijderen</button>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
    @parent

@endsection
