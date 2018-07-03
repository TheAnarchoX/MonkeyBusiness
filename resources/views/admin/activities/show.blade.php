@extends('admin.admin')
@section('style')
    @parent

@endsection
@section('title')
    {{$activity->title}}
@endsection
@section('main')
    <h2 class=" font-weight-bold text-success p-3 mb-0">Activiteit: </h2>
    <h1 class="bg-success text-center font-weight-bold text-white p-3">{{$activity->title}}</h1>
    <img src="{{asset('storage/'.$activity->img_path)}}">
    <h4 class=" font-weight-bold text-success p-3 mb-0">Beschrijving: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$activity->description}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Doelgroep: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$activity->target}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Datum: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{date_format(date_create($activity->event_date), 'd-m-Y')}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Locatie: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$activity->location}} </h4>
    <div class="util-flex-row">
        <div class="util-flex-block text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <a href="{{route('admin.activiteiten.edit', $activity->slug)}}" class="btn-warning rounded-0 text-white m-0 p-5">Bewerken</a>
        </div>
        <div class="util-flex-block  text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <form action="{{route('admin.activiteiten.destroy', $activity->slug)}}" method="POST">
                @csrf
                @method('delete')
            <button type="submit" href="{{route('admin.activiteiten.destroy', $activity->slug)}}" class="border-0 w-100 btn-danger rounded-0 text-white m-0 p-5 " onsubmit="confirm('Weet je dit zeker?')">Verwijderen</button>
            </form>

        </div>
    </div>


@endsection
@section('scripts')
    @parent

@endsection
