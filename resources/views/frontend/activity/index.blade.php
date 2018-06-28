@extends ('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="row">
        @foreach($activities as $activity)
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2 bg-green">
                        <img style="" src="{{$activity->img_path}}" alt="default">
                    </div>
                    <div class="col-md-10">
                        <a href="{{route('public.activiteiten.show', $activity->slug)}}"><h4>{{$activity->title}}</h4></a>
                        <p>{{$activity->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
            {{$activities->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection