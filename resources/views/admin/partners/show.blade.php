@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Partner: {{$partner->name}}
@endsection
@section('main')
    <h2 class=" font-weight-bold text-success p-3 mb-0">Partner: </h2>
    <h1 class="bg-success text-center font-weight-bold text-white p-3">{{$partner->name}}</h1>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Beschrijving: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$partner->description}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">E-Mail: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$partner->email}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Telefoon: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{$partner->phone_number}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Website: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2"><a href="https://{{$partner->website}}" target="_blank" class="text-white">{{$partner->website}}</a>  </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Auteur: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$partner->author->name}} </h4>

    <div class="util-flex-row">
        <div class="util-flex-block text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <a href="{{route('admin.partners.edit', $partner->name)}}" class="btn-warning rounded-0 text-white m-0 p-5">Bewerken</a>
        </div>
        <div class="util-flex-block  text-center text-white font-weight-bold w-100 h-50 m-0 mt-2">
            <form action="{{route('admin.partners.destroy', $partner->name)}}" method="POST">
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
