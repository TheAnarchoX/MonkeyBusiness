@extends ('layouts.app')

@section('content')
    <div class="overlay bg-yellow col-md-7 col-sm-12">
        <h2>Welkom in polderpark Cronesteyn</h2>
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
            Op de pagina <a class="link" href="{{route('public.partners.index')}}">partners</a> vind u meer informatie hierover
        </p>
    </div>
@endsection