@extends('layouts.app')
@section('title')
{{$parner->name}}
@endsection
@section('style')

@endsection

@section('content')
        <div class="col-12">
            <h2>{{ $partner->name }}</h2>
            <p>{{ $partner->description }}</p>

            <p>{{ $partner->site }}</p>

            <p>Gemaakt op: {{ $partner->created_at }}</p>
            <p>Laatste bijgwerkt: {{ $partner->updated_at }}</p>
        </div>
@endsection