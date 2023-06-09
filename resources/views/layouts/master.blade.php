<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title trspan="authPortal"></title>
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/preloader.css') }}">
    <script src="{{ asset('assets/js/jquery.preloader.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}">
    </script>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('img/favicon.ico') }}" rel="icon"
        sizes="16x16 32x32 48x48 64x64 128x128">
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon"
         sizes="16x16 32x32 48x48 64x64 128x128">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<body class="scrollbar CostumScrolBar">
    <!------------------------------------------------------------------------->
    <!--   ****** NavBar ****** -->

    <div class="navbarList">
        <div class='navbarItimes'>
            <img src="{{ asset('img/LOGO-EV_FR.png') }}" style="float:left;width: 90px;margin-left:20px;" class="mr-5">
            @can('dashboard-admin-list')
            <a class="dropbtn  mr-2" href="{{ url('/') }}" style="border-radius: 3px;">Accueil</a>
            @endcan
            @can('client-list')
            <a class="dropbtn" href="{{ url('/clients') }}" style="border-radius: 3px; ">Clients</a>
            @endcan
            @can('commande-list')
            <a class="dropbtn" href="{{ url('/commandes') }}" style="border-radius: 3px; ">Commandes</a>
            @endcan
            @can('dashboard-list')
            <a class="dropbtn" href="{{ url('/dashboard') }}" style="border-radius: 3px; ">Dashboard</a>
            @endcan
            @canany(['matrice-list','menu-list','commercial-list','lieu-list'])
                <div class="dropdownList">
                    <a class="dropbtn mr-2" style="border-radius: 3px;padding: 18px 15px;color:white;">Base de donnée <div
                            class="separ"></div><i class="fa fa-caret-down" aria-hidden="true"></i> </a>
                    <div class="dropdownList-one" style=" max-width: 150px;">
                        @can('matrice-list')
                            <a class="dItem" href="{{ url('/matrices') }}">Matrice</a>
                        @endcan
                        @can('menu-list')
                            <a class="dItem" href="{{ url('/menus') }}">Menu</a>
                        @endcan
                        @can('commercial-list')
                            <a class="dItem" href="{{ url('/commercials') }}">Commercial</a>
                        @endcan
                        @can('lieu-list')
                            <a class="dItem" href="{{ url('/lieus') }}">Lieu</a>
                        @endcan
                    </div>
                </div>
            @endcan
            @can('user-list')
                <a class="dropbtn" href="{{ url('/users') }}" style="border-radius: 3px; ">Utilisateurs</a>
            @endcan
            @can('activity-list')
                <a class="dropbtn" href="{{ url('/activitys') }}" style="border-radius: 3px; ">Log</a>
            @endcan
            @can('role-list')
                <a class="dropbtn" href="{{ url('/roles') }}" style="border-radius: 3px; ">Roles</a>
            @endcan
        </div>
        <div style="float:right;">
            <a style=" color: #f1f3ce;padding:16px;font-size: 14px;" class="text-uppercase"> {{ Auth::user()->name }}
                {{ Auth::user()->last_name }}</a>
            <div class="dropdownList">
                <div class='userInfoAvatar'>
                    <a class="imgUser"><img style="border-radius:50%"
                            src="{{ asset('img/avatar/' . Auth::user()->avatar) }}"></a>
                    <div class="dropdownList-one" style=" right: 0px; ">
                        <a class="dItem" href="{{ url('users/edit') }}">Mon compte</a>
                        <a style="color:Black;" class="dItem" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content px-3 mx-auto mt-5">
        @yield("content")
    </div>
    <!------------------------------------------------------------------------->
