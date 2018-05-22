<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>/title/</title>
    <meta name="description" content="discription">

    {{-- Styles&fonts --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Reset.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Standard.css') }}">
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <header class="img-wrapper">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <div class="container">
                    <ul class="d-flex justify-content-start">
                        <li class="nav-link"><a href="/" class="nav-item">Home</a></li>
                        <li class="nav-link"><a href="/activiteiten" class="nav-item">Activiteiten</a></li>
                        <li class="nav-link"><a href="/partners" class="nav-item">Partners</a></li>
                    </ul>
                    <a class="d-flex justify-content-center"><img src="{{asset('images/logo.png')}}"></a>
                    <ul class="d-flex justify-content-end">
                        <li class="nav-link"><a href="/niews" class="nav-item">Nieuws</a></li>
                        <li class="nav-link"><a href="/fotos" class="nav-item">Foto's</a></li>
                        <li class="nav-link"><a href="/contact" class="nav-item">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>