@extends ('layouts.app')
@section('title', 'Partners Overzicht')

@section('style')

@endsection
@section('content')
    <div class="row" id="mainPhotosNode">
        @foreach($partners as $partner)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="{{url()->current()}}/{{$partner->name}}">
                    {{$partner->name}}
                </a>
            </div>
        @endforeach
        {{$partners->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection