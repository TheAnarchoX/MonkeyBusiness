<header class="img-wrapper">
    <nav class="navbar navbar-expand-md navbar-light bg-light container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="d-flex justify-content-start navbar-nav">
                <li class="nav-link"><a href="{{route('public.landing')}}" class="nav-item">Home</a></li>
                <li class="nav-link"><a href="{{route('public.activiteiten.index')}}" class="nav-item">Activiteiten</a></li>
                <li class="nav-link"><a href="{{route('public.partners.index')}}" class="nav-item">Partners</a></li>
            </ul>
            <a class="d-flex justify-content-center logo"><img src="{{asset('images/logo.png')}}"></a>
            <ul class="d-flex justify-content-end navbar-nav">
                <li class="nav-link"><a href="{{route('public.nieuws.index')}}" class="nav-item">Nieuws</a></li>
                <li class="nav-link"><a href="{{route('public.fotos.index')}}" class="nav-item">Foto's</a></li>
                <li class="nav-link"><a href="{{route('public.berichten.create')}}" class="nav-item">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>