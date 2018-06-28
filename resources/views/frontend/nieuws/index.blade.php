@extends ('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="row" id="mainPhotosNode">
        @if(isset($dbQuerry))
            @foreach($dbQuerry as $item)
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a href="{{url()->current()}}/{{$item->slug}}">
                        {{$item->title}}
                    </a>
                </div>
            @endforeach
            {{$dbQuerry->links('vendor.pagination.bootstrap-4')}}
        @endif

        @if(isset($news))
            <div class="col-12">
                <h2>{{ $news->title }}</h2>
                <p>{{ $news->body }}</p>

                <p>{{ $news->site }}</p>

                <p>Gepubliceerd op: {{ $news->publication_date }}</p>
                <p>Laatste bijgwerkt: {{ $news->updated_at }}</p>
            </div>
        @endif
    </div>
@endsection