@extends ('layouts.app')
@section('title', 'Nieuws Overzicht')
@section('style')

@endsection

@section('content')
    <div class="row">
        @foreach($news as $newsItem)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2 bg-green">
                        <img style="" src="{{$newsItem->img_path}}" alt="default">
                    </div>
                    <div class="col-md-10">
                        <a href="{{route('public.nieuws.show', $newsItem->slug)}}"><h4>{{$newsItem->title}}</h4></a>
                        <p>{{$newsItem->body}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        {{$news->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection
