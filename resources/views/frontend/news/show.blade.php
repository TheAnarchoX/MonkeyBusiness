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
                    <th class="font-weight-semibold" scope="row">Geplaatst op:</th>
                    <td>{{$news->publication_date}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Geplaatst door:</th>
                    <td>{{$news->author}}</td>
                </tr>
                </tbody>
            </table>
            <div class="col-md-9">
                <h2 class="text-center">{{$news->title}}</h2>
                <p>{{$news->body}}</p>
                <img src="{{$news->img_path}}" alt="News pic">
            </div>
        </div>
    </div>
@endsection