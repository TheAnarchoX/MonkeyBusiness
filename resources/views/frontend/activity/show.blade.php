@extends ('layouts.app')

@section('style')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-sm bg-yellow overlay col-md-3">
                <tbody>
                <tr>
                    <td colspan="2" class="text-center border-top-0 font-weight-semibold">Additional Info</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Voor wie?</th>
                    <td>{{$activity->target}}</td>

                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Waar?</th>
                    <td>{{$activity->location}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Wanneer?</th>
                    <td>{{$activity->event_date}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Geüpload door:</th>
                    <td>{{$activity->author()}}</td>
                </tr>
                </tbody>
            </table>
            <div class="col-md-9">
                <h2 class="text-center">{{$activity->title}}</h2>
                <p>{{$activity->description}}</p>
                <img src="{{$activity->img_path}}" alt="Activity pic">
            </div>
        </div>
    </div>
@endsection