@extends ('layouts.app')

@section('content')
    <div class="row" id="mainPhotosNode">
        @foreach($dbQuerry as $item)
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img src="{{ $item->img_path }}" alt="{{ $item->title }}" class="photos">
        </div>
        @endforeach
    </div>
@endsection
{{-- todo:select propper path later, decide wheter we want to use a new folder in public, storage or something else --}}