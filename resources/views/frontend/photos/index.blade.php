@extends ('layouts.app')
@section('title', "Foto's Overzicht")
@section('content')
    <div class="row" id="mainPhotosNode">
        @foreach($photos as $photo)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="{{url()->current()}}/{{$photo->slug}}">
                    <img src="{{asset('storage/'.$photo->img_path)}}" alt="{{ $photo->slug }}" class="photos">
                    <p>{{ $photo->title }}</p>
                </a>
            </div>
        @endforeach
        {{$photos->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection