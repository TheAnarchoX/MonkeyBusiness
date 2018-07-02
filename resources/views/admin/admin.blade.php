<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "") | {{ config('app.name') }}</title>
    <meta name="description" content="description">

    {{-- Styles&fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,600">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <style type="text/css">
        .util-flex-row {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: stretch;
            align-content: center;
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .util-flex-block {
            flex-grow: 1;
            padding: 3rem;
            margin-left: 0.25rem;
            margin-right: 0.25rem;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
        }

        .util-flex-block > * {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(2),
        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(2) ~ .util-flex-block  {
            flex-basis: 50%;
        }

        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(3),
         .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(3) ~ .util-flex-block  {
             flex-basis: 33.33333%;
         }

        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(4),
        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(4) ~ .util-flex-block  {
            flex-basis: 25%
        }

        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(5),
        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(5) ~ .util-flex-block  {
            flex-basis:20%;
        }

        .util-flex-row > .util-flex-block:first-of-type {
            margin-left: 0 !important;
            margin-right: 0.25rem !important;
        }

        .util-flex-row > .util-flex-block:last-of-type {
            margin-right: 0 !important;
            margin-left: 0.25rem !important;
        }
        .util-flex-row > .util-flex-block:first-of-type:nth-last-of-type(2) {
            margin-left: 0 !important;
            margin-right: 0.25rem !important;
        }

        .util-flex-row > .util-flex-block:last-of-type:nth-last-of-type(2) {
            margin-right: 0 !important;
            margin-left: 0.25rem !important;
        }
        .util-flex-row > .util-flex-block:only-of-type {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .bg-blue {
            background-color: #1ea5ff;
        }
    </style>
    <style>
        .pagination * {
            border-radius: 0 !important;
        }

        .pagination .disabled .page-link {
            color: grey !important;
        }
        .pagination > li > a,
        .pagination > li > span {
            color: green !important;
            font-weight: bold;
        }

        .pagination > .active > a,
        .pagination > .active > a:focus,
        .pagination > .active > a:hover,
        .pagination > .active > span,
        .pagination > .active > span:focus,
        .pagination > .active > span:hover {
            color: white !important;;
            background-color: green !important;
            border-color: green !important;
        }
    </style>
    @yield('style')
</head>

<body>
<div class="container-fluid">
    <div class="row d-flex d-md-block flex-nowrap wrapper">
        @include('admin.sidebar')
        <main class="offset-md-2 col-md-10 float-left col px-5 pl-md-2 pt-2 main">
            <div class="w-100 mt-4 pl-5 d-flex flex-column justify-content-center align-items-stretch">
                @yield('main')
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function($) {
        $(".clickable").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
@yield('scripts')
</body>
</html>