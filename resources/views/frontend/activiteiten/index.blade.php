@extends ('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="row">
        @foreach($activities as $activity)
            <div class="col-md-6">
                <a href="{{route('public.activiteiten.show', $activity->slug)}}"><h2>{{$activity->title}}</h2></a>
                <p>{{$activity->description}}</p>
            </div>
        @endforeach
            {{$activities->links('vendor.pagination.bootstrap-4')}}
    </div>
@endsection