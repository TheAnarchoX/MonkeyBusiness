@extends('admin.admin')
@section('title', "Dashboard")
@section('main')
    @php use Illuminate\Support\Facades\Auth; @endphp
    <h1 class="text-center font-weight-bold font bg-success text-white p-5">Welkom bij het Cronesteyn Admin Paneel</h1>
    <div class="util-flex-row">
        @can('view', App\Activity::class)
            <a href="{{route('admin.activiteiten.index')}}" class="btn-success text-center text-white font-weight-bold util-flex-block" ><p>Activiteiten</p></a>
        @endcan
        @can('view', App\News::class)
            <a href="{{route('admin.nieuws.index')}}" class="btn-success text-center text-white font-weight-bold util-flex-block" ><p>Nieuws</p></a>
        @endcan
        @can('view', App\Partner::class)
            <a href="{{route('admin.partners.index')}}" class="btn-success text-center text-white font-weight-bold util-flex-block" ><p>Partners</p></a>
        @endcan
    </div>
    <div class="util-flex-row">
        @can('view', App\Album::class)
            <a href="{{route('admin.albums.index')}}" class="btn-success text-center text-white font-weight-bold util-flex-block" ><p>Albums</p></a>
        @endcan
        @can('view', App\Photo::class)
            <a href="{{route('admin.fotos.index')}}" class="btn-success text-center text-white font-weight-bold util-flex-block" ><p>Foto's</p></a>
        @endcan
        @can('view', App\Text::class)
            <a href="{{route('admin.teksten.index')}}" class="btn-success text-center text-white font-weight-bold util-flex-block" ><p>Teksten</p></a>
        @endcan
    </div>
    <div class="util-flex-row">
        @can('view', App\User::class)
            <a href="{{route('admin.gebruikers.index')}}" class="bg-success text-center text-white font-weight-bold util-flex-block" ><p>Gebruikers</p></a>
        @endcan
        @if(Auth::user()->isSuperAdmin())
            <a href="{{route('admin.log.index')}}" class="bg-success text-center text-white font-weight-bold util-flex-block" ><p>Logboeken</p></a>
        @endif
        @if(Auth::user()->isSuperAdmin())
            <a href="{{route('admin.stats.index')}}" class="bg-success text-center text-white font-weight-bold util-flex-block" ><p>Statistieken</p></a>
        @endif
    </div>
@endsection