@extends ('layouts.app')

@section('content')
    <div class="row" id="mainPhotosNode">
        @if(isset($dbQuerry))
            @foreach($dbQuerry as $item)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a href="{{url()->current()}}/{{$item->name}}">
                        {{$item->name}}
                    </a>
                </div>
            @endforeach
            {{$dbQuerry->links('vendor.pagination.bootstrap-4')}}
        @endif

        @if(isset($partner))
            <div class="col-12">
                <h2>{{ $partner->name }}</h2>
                <p>{{ $partner->description }}</p>

                <p>{{ $partner->site }}</p>

                <p>Gemaakt op: {{ $partner->created_at }}</p>
                <p>Laatste bijgwerkt: {{ $partner->updated_at }}</p>
            </div>
        @endif
    </div>
@endsection

@section('style')

@endsection