@extends ('layouts.app')
@section('title', "Foto's Overzicht")
@section('content')
    <div class="row">
        @foreach($photos as $photo)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2 bg-green">
                        <img style="" src="{{$photo->img_path}}" alt="default">
                    </div>
                    <div class="col-md-10">
                        <a href="{{route('public.fotos.show', $photo->slug)}}"><h4>{{$photo->title}}</h4></a>
                        <p>{{$photo->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        {{$photos->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection