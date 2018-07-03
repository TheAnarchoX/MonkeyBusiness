<style>
    @font-face {
        font-family: "FontAwesome";
        font-weight: normal;
        font-style: normal;
        src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?v=4.3.0");
        src: url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0") format("embedded-opentype"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff2?v=4.3.0") format("woff2"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff?v=4.3.0") format("woff"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.ttf?v=4.3.0") format("truetype"),
        url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular") format("svg");
    }

    #sidebar {
        overflow: hidden;
        z-index: 3;
    }

    #sidebar .list-group {
        min-width: 400px;
        background-color: #333333;
        min-height: 100vh;
    }

    #sidebar i {
        margin-right: 6px;
    }

    #sidebar .list-group-item {
        border-radius: 0;
        background-color: #333;
        color: #ccc;
        border-left: 0;
        border-right: 0;
        border-color: #2c2c2c;
        white-space: nowrap;

    }

    #sidebar .list-group-item:hover {
        filter: brightness(150%);
    }

    /* highlight active menu */
    #sidebar .list-group-item:not(.collapsed) {
        background-color: #114885;
    }

    /* closed state */
    #sidebar .list-group .list-group-item[aria-expanded="false"]::after {
        content: "\F0d7";
        font-family: FontAwesome, serif;
        display: inline;
        text-align: right;
        padding-left: 5px;
    }

    /* open state */
    #sidebar .list-group .list-group-item[aria-expanded="true"] {
        background-color: #1976d2;
    }

    #sidebar .list-group .list-group-item[aria-expanded="true"]::after {
        content: " \F0da";
        font-family: FontAwesome, serif;
        display: inline;
        text-align: right;
        padding-left: 5px;
    }

    /* level 1*/
    #sidebar .list-group .collapse .list-group-item,
    #sidebar .list-group .collapsing .list-group-item {
        padding-left: 20px;
    }

    #sidebar .list-group .collapse .list-group-item:active,
    #sidebar .list-group .collapsing .list-group-item:active {
        background-color: #1976d2;
    }

    /* level 2*/
    #sidebar .list-group .collapse > .collapse .list-group-item,
    #sidebar .list-group .collapse > .collapsing .list-group-item {
        padding-left: 30px;
    }

    /* level 3*/
    #sidebar .list-group .collapse > .collapse > .collapse .list-group-item {
        padding-left: 40px;
    }

    @media (max-width: 768px) {
        #sidebar {
            min-width: 35px;
            max-width: 40px;
            overflow-y: auto;
            overflow-x: visible;
            transition: all 0.25s ease;
            transform: translateX(-45px);
            position: fixed;
        }

        #sidebar.show {
            transform: translateX(0);
        }

        #sidebar::-webkit-scrollbar {
            width: 0;
        }

        #sidebar, #sidebar .list-group {
            min-width: 35px;
            overflow: visible;
        }

        /* overlay sub levels on small screens */
        #sidebar .list-group .collapse.show, #sidebar .list-group .collapsing {
            position: relative;
            z-index: 1;
            width: 300px;
            top: 0;
        }

        #sidebar .list-group > .list-group-item {
            text-align: center;
            padding: .75rem .5rem;
        }

        /* hide caret icons of top level when collapsed */
        #sidebar .list-group > .list-group-item[aria-expanded="true"]::after,
        #sidebar .list-group > .list-group-item[aria-expanded="false"]::after {
            display: none;
        }
    }

    .collapse.show {
        visibility: visible;
    }

    .collapsing {
        visibility: visible;
        height: 0;
        -webkit-transition-property: height, visibility;
        transition-property: height, visibility;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .collapsing.width {
        -webkit-transition-property: width, visibility;
        transition-property: width, visibility;
        width: 0;
        height: 100%;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
</style>
<script type="text/javascript">
    $("#sidebarToggle']").click(function () {
        $("span.d-none").stop(true, true).toggleClass("d-md-inline");
        $("#sidebar").width("30px");
    });
</script>
<div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show position-fixed" id="sidebar">
    <div class="list-group border-0 card text-center text-md-left">
        <a href="{{route('admin.dashboard')}}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-dashboard" aria-hidden="true"></i> <span class="d-none d-md-inline">Dashboard</span></a>
        <a href="#activityMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-calendar" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Activiteiten </span></a>
        <div class="collapse" id="activityMenu" data-parent="#sidebar">
            @can('view', App\Activity::class)
                @can('create', App\Activity::class)
                    <a href="{{route('admin.activiteiten.create')}}" class="list-group-item bg-success" data-parent="#activityMenu"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Nieuw Evenement</a>
                @endcan
                <a href="{{route('admin.activiteiten.index')}}" class="list-group-item" data-parent="#activityMenu"><i class="fa fa-calendar-o" aria-hidden="true"></i>Overzicht</a>
            @endcan
            @cannot('view', App\Activity::class)
                <a role="menuitem" class="list-group-item bg-danger ">Niet beschikbaar</a>
            @endcannot
        </div>
        <a href="#imageMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-image" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Beeldmateriaal </span></a>
        <div class="collapse" id="imageMenu" data-parent="#sidebar">
            <a href="#photoMenu" class="list-group-item" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file-image-o" aria-hidden="true"></i>Foto's </a>
            <div class="collapse" id="photoMenu">
                @can('view', App\Photo::class)
                    @can('create', App\Photo::class)
                        <a href="{{route('admin.fotos.create')}}" class="list-group-item bg-success" data-parent="#photoMenu"><i class="fa fa-plus-square" aria-hidden="true"></i>Foto Uploaden</a>
                    @endcan
                    <a href="{{route('admin.fotos.index')}}" class="list-group-item" data-parent="#photoMenu"><i class="fa fa-image" aria-hidden="true"></i>Overzicht</a>
                @endcan
                @cannot('view', App\Photo::class)
                    <a role="menuitem" class="list-group-item bg-danger">Niet beschikbaar</a>
                @endcannot
            </div>
            <a href="#albumMenu" class="list-group-item" data-toggle="collapse" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i>Album's </a>
            <div class="collapse" id="albumMenu">
                    <a role="menuitem" class="list-group-item bg-danger text-white">Niet beschikbaar</a>
            </div>
        </div>
        <a href="#newsMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Nieuwsberichten </span></a>
        <div class="collapse" id="newsMenu" data-parent="#sidebar">
            @can('view', App\News::class)
                @can('create', App\News::class)
                    <a href="{{route('admin.nieuws.create')}}" class="list-group-item bg-success" data-parent="#newsMenu"><i class="fa fa-plus-square" aria-hidden="true"></i>Nieuw Nieuwsbericht</a>
                @endcan
                <a href="{{route('admin.nieuws.index')}}" class="list-group-item" data-parent="#newsMenu"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Overzicht</a>
            @endcan
            @cannot('view', App\News::class)
                <a role="menuitem" class="list-group-item bg-danger text-white">Niet beschikbaar</a>
            @endcannot
        </div>
        <a href="#partnerMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-building-o" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Partners </span></a>
        <div class="collapse" id="partnerMenu" data-parent="#sidebar">
            @can('view', App\Partner::class)
                @can('create', App\Partner::class)
                    <a href="{{route('admin.partners.create')}}" class="list-group-item bg-success" data-parent="#partnerMenu"><i class="fa fa-plus-square" aria-hidden="true"></i>Nieuwe Partner</a>
                @endcan
                <a href="{{route('admin.partners.index')}}" class="list-group-item" data-parent="#partnerMenu"><i class="fa fa-building-o" aria-hidden="true"></i>Overzicht</a>
            @endcan
            @cannot('view', App\Partner::class)
                <a role="menuitem" class="list-group-item bg-danger text-white">Niet beschikbaar</a>
            @endcannot
        </div>
        <a href="#textMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Teksten </span></a>
        <div class="collapse" id="textMenu" data-parent="#sidebar">
                <a role="menuitem" class="list-group-item bg-danger text-white">Niet beschikbaar</a>
        </div>
        <a href="#superUserMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Gebruikers </span></a>
        <div class="collapse" id="superUserMenu" data-parent="#sidebar">
            @can('view', App\User::class)

                @can('create', App\User::class)
                    <a href="{{route('admin.gebruikers.create')}}" class="list-group-item  bg-success" data-parent="#superUserMenu"><i class="fa fa-user-plus" aria-hidden="true"></i>Nieuwe Gebruiker</a>
                @endcan
                <a href="{{route('admin.gebruikers.index')}}" class="list-group-item" data-parent="#superUserMenu"><i class="fa fa-users" aria-hidden="true"></i>Overzicht</a>
                <a href="{{route('admin.gebruikers.general')}}" class="list-group-item" data-parent="#superUserMenu"><i class="fa fa-user-circle" aria-hidden="true"></i>Algemene Gebruikers</a>
                <a href="{{route('admin.gebruikers.admin')}}" class="list-group-item" data-parent="#superUserMenu"><i class="fa fa-user-md" aria-hidden="true"></i>Beheerders</a>
                <a href="{{route('admin.gebruikers.superUsers')}}" class="list-group-item" data-parent="#superUserMenu"><i class="fa fa-user-secret" aria-hidden="true"></i>SuperUsers</a>
            @endcan
            @cannot('view', App\User::class)
                <a role="menuitem" class="list-group-item bg-danger text-white">Niet beschikbaar</a>
            @endcannot
        </div>
        @if(Auth::user()->isSuperAdmin())
            {{--<a href="{{route("admin.log.index")}}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-book" aria-hidden="true"></i> <span class="d-none d-md-inline">Logboeken</span></a>--}}
            {{--<a href="{{route("admin.stats.index")}}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-area-chart" aria-hidden="true"></i> <span class="d-none d-md-inline">Statistieken</span></a>--}}
        @endif
        <a href="#currentUserMenu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-vcard-o" aria-hidden="true"></i> <span
                    class="d-none d-md-inline">Mijn Profiel </span></a>
        <div class="collapse" id="currentUserMenu" data-parent="#sidebar">
            <a href="{{route('admin.gebruikers.current.show')}}" class="list-group-item" data-parent="#currentUserMenu"><i class="fa fa-vcard-o" aria-hidden="true"></i>Mijn Gegevens</a>
            <a href="{{route('admin.gebruikers.settings.show')}}" class="list-group-item" data-parent="#currentUserMenu"><i class="fa fa-cogs" aria-hidden="true"></i>Instellingen</a>
            <a href="{{route('public.auth.logout')}}" class="list-group-item bg-danger" data-parent="#currentUserMenu"><i class="fa fa-sign-out" aria-hidden="true"></i>Uitloggen</a>
        </div>
    </div>
</div>
