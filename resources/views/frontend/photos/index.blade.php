@extends ('layouts.app')

@section('content')
    <div class="row" id="mainPhotosNode">
        @if(isset($dbQuerry))
            @foreach($dbQuerry as $item)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a href="{{url()->current()}}/{{$item->id}}">
                        <img src="{{ public_path($item->img_path) }}" alt="{{ $item->title }}" class="photos">
                    </a>
                </div>
            @endforeach
        @endif

        @if(isset($dbQuerryShow))
            <div class="col-12">
                <a href="{{public_path($dbQuerryShow->img_path)}}">
                    <img src="{{ public_path($dbQuerryShow->img_path) }}" alt="{{ $dbQuerryShow->slug }}" class="photos">
                </a>
                <h2>{{ $dbQuerryShow->title }}</h2>
                <p>{{ $dbQuerryShow->description }}</p>

                <p>Gemaakt op: {{ $dbQuerryShow->created_at }}</p>
                <p>Laatste bijgwerkt: {{ $dbQuerryShow->updated_at }}</p>
            </div>
        @endif
    </div>
@endsection