@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Bericht via contactformulier
@endsection
@section('main')
    <h2 class=" font-weight-bold text-success p-3 mb-0">Bericht: </h2>
    <h1 class="bg-success text-center font-weight-bold text-white p-3">{{decrypt($message->subject)}}</h1>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Datum: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$message->created_at}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Inhoud: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-0">{{decrypt($message->message)}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Afzender: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$message->name}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">E-mail: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$message->email}} </h4>
    <h4 class=" font-weight-bold text-success p-3 mb-0">Telefoon nummer: </h4>
    <h4 class="bg-success text-center font-weight-bold text-white p-3 mb-2">{{$message->mobile_number}} </h4>

@endsection
@section('scripts')
    @parent

@endsection
