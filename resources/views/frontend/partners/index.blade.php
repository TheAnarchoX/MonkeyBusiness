@extends ('layouts.app')
@section('title', 'Partners Overzicht')

@section('style')

@endsection
@section('content')
    <div class="row">
        @foreach($partners as $partner)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2 bg-green">
                        <img style="" src="{{$partner->img_path}}" alt="default">
                    </div>
                    <div class="col-md-10">
                        <a href="{{route('public.partners.show', $partner->name)}}"><h4>{{$partner->name}}</h4></a>
                        <p>{{$partner->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        {{$partners->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection