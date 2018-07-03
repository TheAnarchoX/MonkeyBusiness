@extends ('layouts.app')
@section('title')
{{$activity->title}}
@endsection
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
                    <td>{{date_format(date_create($activity->event_date), 'd-m-Y')}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Geplaatst door:</th>
                    <td>{{$activity->author->name}}</td>
                </tr>
                </tbody>
            </table>
            <div class="col">
                <h2 class="text-center">{{$activity->title}}</h2>
                <p>{{$activity->description}}</p>
                <img src="{{$activity->img_path}}" alt="Activity pic">
            </div>
        </div>
    </div>
@endsection