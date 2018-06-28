@extends ('layouts.app')

@section('content')
    <div class="row" id="mainPhotosNode">
        @if(isset($dbQuerry))
            @foreach($dbQuerry as $item)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a href="{{url()->current()}}/{{$item->slug}}">
                        <img src="{{ public_path($item->img_path) }}" alt="{{ $item->title }}" class="photos">
                    </a>
                </div>
            @endforeach
            {{$dbQuerry->links('vendor.pagination.bootstrap-4')}}
        @endif

        @if(isset($photo))
            <div class="col-12">
                <a href="{{public_path($photo->img_path)}}">
                    <img src="{{ public_path($photo->img_path) }}" alt="{{ $photo->slug }}" class="photos">
                </a>
                <h2>{{ $photo->title }}</h2>
                <p>{{ $photo->description }}</p>

                <p>Gemaakt op: {{ $photo->created_at }}</p>
                <p>Laatste bijgwerkt: {{ $photo->updated_at }}</p>
            </div>
        @endif
    </div>
@endsection