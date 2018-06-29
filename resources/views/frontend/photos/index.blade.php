@extends ('layouts.app')

@section('content')
    <div class="row" id="mainPhotosNode">
        @foreach($dbQuerry as $item)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="{{url()->current()}}/{{$item->slug}}">
                    <img src="{{ public_path($item->img_path) }}" alt="{{ $item->title }}" class="photos">
                </a>
            </div>
        @endforeach
        {{$dbQuerry->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection