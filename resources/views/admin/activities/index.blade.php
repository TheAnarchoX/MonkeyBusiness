@extends('admin.admin')
@section('styles')
    @parent

@endsection
@section('title')
    Activiteiten
@endsection
@section('main')
    <h1 class="text-center">Test</h1>
    @foreach($activities as $activity)
        @dump($activity->author)
    @endforeach
@endsection
@section('scripts')
    @parent

@endsection
