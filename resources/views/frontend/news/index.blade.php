@extends ('layouts.app')
@section('title', 'Nieuws Overzicht')
@section('style')

@endsection

@section('content')
    <div class="row" id="mainPhotosNode">
        @foreach($news as $newsItem)
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="{{url()->current()}}/{{$newsItem->slug}}">
                    {{$newsItem->title}}
                </a>
            </div>
        @endforeach
        {{$news->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection