@extends ('layouts.app')
@section('title')
    {{$photo->title}}
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
                    <th class="font-weight-semibold" scope="row">Geüpload op:</th>
                    <td>{{date_format(date_create($photo->created_at), 'd-m-Y')}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Geplaatst door:</th>
                    <td>{{$photo->author->name}}</td>
                </tr>
                </tbody>
            </table>
            <div class="col">
                <h2 class="text-center">{{$photo->title}}</h2>
                <p>{{$photo->description}}</p>
                <img src="{{$photo->img_path}}" alt="Photo">
            </div>
        </div>
    </div>
@endsection