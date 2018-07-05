@extends('admin.admin')
@section('style')
    @parent
@endsection
@section('title')
    Berichten
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
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <tr class="text-center">
            <th colspan="1000">Berichten</th>
        </tr>
        <tr>
            <th>Onderwerp</th>
            <th>Afzender</th>
            <th>E-mail</th>
            <th>Mobiel nummer</th>
            <th>Datum binnengekomen</th>
        </tr>
        </thead>
        @foreach($messages as $message)
            <tr data-href="{{route('admin.berichten.show', $message->id)}}"  class="@if($message->is_read == 1) bg-warning text-white @endif @unless($message->is_read) bg-success text-white @endunless clickable">
                <td>{{decrypt($message->subject)}}</td>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->mobile_number}}</td>
                <td>{{$message->created_at}}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center align-items-center">
        {{$messages->links()}}
    </div>
@endsection
@section('scripts')
    @parent
@endsection
