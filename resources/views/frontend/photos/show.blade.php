@extends ('layouts.app')
@section('title')
    {{$photo->title}}
@endsection
@section('content')
    <div class="row" id="mainPhotosNode">
        <div class="col-12">
            <a href="{{public_path($photo->img_path)}}">
                <img src="{{ public_path($photo->img_path) }}" alt="{{ $photo->slug }}" class="photos">
            </a>
            <h2>{{ $photo->title }}</h2>
            <p>{{ $photo->description }}</p>

            <p>Gemaakt op: {{ $photo->created_at }}</p>
            <p>Laatste bijgwerkt: {{ $photo->updated_at }}</p>
        </div>
    </div>
@endsection