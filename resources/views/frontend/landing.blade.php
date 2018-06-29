@extends ('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="overlay bg-yellow col-md-6 col-sm-12">
        <h2 class="text-center">Welkom in polderpark Cronesteyn</h2>
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
            Op de pagina <a class="link" href="{{route('public.partners.index')}}">partners</a> vind u meer informatie hierover
        </p>
    </div>
    <div class="overlay bg-green col-md-6 col-sm-12 float-md-right">
        <h2 class="text-center">Laatste nieuws</h2>
        <hr>
        <p class="font-weight-semibold">
            Zoemen in het veen’
            Zondag 17 juni 2017 vindt om 14.00 uur de excursie ’Zoemen in het veen’ naar de moerastuin van Polderpark Cronesteyn plaats.
        </p>
        <p>
            In dit dieper liggende deel van het park, waar van alles groeit en bloeit wat van natte voeten houdt, is de zomer in gang gezet.
            De purperen rietorchis bloeit tussen het geel van de ratelaars.
            Hommels, vlinders, libellen en andere vliegende beestjes hebben hier hun eldorado gevonden.
            Tot vreugde van insecten etende vogels als kleine karekiet en fitis.
            Er zal vooral ook aandacht worden besteed aan de aanwezige wilde bijen.
            Wilde bijen hebben het momenteel niet makkelijk, en verdienen bescherming. Zie ook <a class="link" href="https://www.nederlandzoemt.nl/" target="_blank">www.nederlandzoemt.nl</a>
        </p>
        <p>
            <b class="font-weight-semibold">De excursie duurt van 14.00 – 16.00 uur.</b><br>
            Verzamelplaats De tuin van de Smid, middenin het park.
            Droog en nat wisselen elkaar af in de moerastuin, waterdicht schoeisel is na een stevige regenbui een aanrader.
        </p>
    </div>
@endsection