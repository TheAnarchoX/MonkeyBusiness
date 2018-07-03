@extends ('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="overlay bg-yellow col-12 col-12">
        <h1 class="text-center">Welkom in polderpark Cronesteyn</h1>
        <hr>
        <p>
            Polderpark Cronesteyn ligt in de kleine Cronesteynse polder ook wel de Knotterpolder genoemd.
            De polder ligt tussen de A4, de spoorlijn naar Alphen aan den Rijn, het Rijn-Schiekanaal en de N206.
            De grootte is ca. 90 hectare.
        </p>
        <p>
            In 1975 kwam Cronesteyn in handen van de gemeente leiden.
            In 1982 werd het polderpark gerealiseerd naar het ontwerp van Evert Cornet.
            Het park is geworden tot ontmoetingsplek, rustpunt, historisch monument en speciaal biotoop.
        </p>
        <p>
            In het park zijn wandel- en fietspaden aangeelegd, op de fietspaden is ook goed te skaten.
            Daarnaast zijn er een moerastuin, een waterspeelplaats, een landgoedbos en een camping te vinden.
            Ook is er een bos waar ieder jaar reigers broeden.
        </p>
        <p>
            In het park is het theehuis ‘De tuin van de smid’ (voorheen bezoekerscentrum ‘Het Reigerbos’) te vinden,
            Het theehuis is iedere dag geopend.
        </p>
        <p>
            Een aantal organisaties is op een educatieve of recreatieve manier actief in het park.
            Op de pagina <a class="link" href="{{route('public.partners.index')}}">partners</a> vind u meer informatie
            hierover
        </p>
    </div>
    <div class="overlay bg-green col-12">
        <h2 class="text-center">Laatste Nieuws</h2>
        <hr>
        <div class="row">
            @foreach($home['recentNews'] as $news)
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <h5 class="text-center font-weight-semibold">
                        {{$news->title}}
                    </h5>
                    <p>
                        {{$news->body}}
                    </p>
                    <a href="{{route('public.nieuws.show',$news->slug)}}" class="link">Read More ></a>
                    <blockquote>Geplaatst op: {{date_format(date_create($news->publication_date), 'd-m-Y')}}</blockquote>
                </div>
            @endforeach
        </div>
    </div>
    <div class="overlay bg-brown col-12">
        <h2 class="text-center">Komende Activiteiten</h2>
        <hr>
        <div class="row">
            @foreach($home['recentActivity'] as $activity)
                <div class="col-xl col-lg-4 col-sm-6 col-12">
                    <h5 class="text-center font-weight-semibold">
                        {{$activity->title}}
                    </h5>
                    <p>
                        {{$activity->description}}
                    </p>
                    <a href="{{route('public.activiteiten.show',$activity->slug)}}" class="link">Read More ></a>
                    <blockquote>Activiteit op: {{date_format(date_create($activity->event_date), 'd-m-Y')}}</blockquote>
                </div>
            @endforeach
        </div>
    </div>
@endsection