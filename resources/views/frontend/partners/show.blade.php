@extends ('layouts.app')
@section('title')
    {{$partner->name}}
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
                    <th class="font-weight-semibold" scope="row">Telefonnummer:</th>
                    <td>{{$partner->phone_number}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">E-mail Adres:</th>
                    <td>{{$partner->email}}</td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Website:</th>
                    <td><a class="link" target="_blank" href="http://www.{{$partner->website}}">{{$partner->website}}</a></td>
                </tr>
                <tr>
                    <th class="font-weight-semibold" scope="row">Geplaatst door:</th>
                    <td>{{$partner->author->name}}</td>
                </tr>
                </tbody>
            </table>
            <div class="col">
                <h2 class="text-center">{{$partner->name}}</h2>
                <p>{{$partner->description}}</p>
            </div>
        </div>
    </div>
@endsection