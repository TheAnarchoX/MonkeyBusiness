@extends ('layouts.app')

@section('content')
    <div class="row" id="mainPhotosNode">
        @if(isset($dbQuerry))
            @foreach($dbQuerry as $item)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a href="{{url()->current()}}/{{$item->id}}">
                        {{$item->name}}
                    </a>
                </div>
            @endforeach
        @endif

        @if(isset($dbQuerryShow))
            <div class="col-12">
                <h2>{{ $dbQuerryShow->name }}</h2>
                <p>{{ $dbQuerryShow->description }}</p>

                <p>{{ $dbQuerryShow->site }}</p>

                <p>Gemaakt op: {{ $dbQuerryShow->created_at }}</p>
                <p>Laatste bijgwerkt: {{ $dbQuerryShow->updated_at }}</p>
            </div>
        @endif
    </div>
@endsection

@section('style')

@endsection