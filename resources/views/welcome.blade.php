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
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Menu Labo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a class="btn btn-light w-100" href="{{ url('/commandes') }}"> Commandes </a>
                    <a class="btn btn-light w-100" href="{{ url('/dashboard') }}"> Dashboard </a>
                    <a class="btn btn-light w-100" href="{{ url('/analyses') }}"> Analyses </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalMenuAdmin" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Administration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @can('activity-list')
                        <a class="btn btn-light w-100" href="{{ url('/activitys') }}"> Audit Acces </a>
                    @endcan
                    @can('user-list')
                        <a class="btn btn-light w-100" href="{{ url('/users') }}"> Utilisateurs </a>
                    @endcan
                    @can('role-list')
                        <a class="btn btn-light w-100" href="{{ url('/roles') }}"> Roles Managment </a>
                    @endcan

                </div>
            </div>
        </div>
    </div>
    <div class="navbarList">
        <img src="{{ asset('img/LOGO-EV-RVB.png') }}" style="float:left;width: 80px;margin-left:20px;">
        <!-- Modal -->
        <div style="float:right;">
            <a style=" color: #f1f3ce;padding:16px;font-size: 14px;" class="text-uppercase"> {{ Auth::user()->name }}
                {{ Auth::user()->last_name }}</a>
            <div class="dropdownList">
                <div class='userInfoAvatar'>
                    <a class="imgUser "><img style="border-radius:50%"
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
    <div class="row  w-100 mt-5">
        <div class="col-sm-12 col-md-4 d-flex justify-content-center text-center">
            <div class="card text-center" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/ascending-graph-1173935.png') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text w-100 rounded-3 p-1" style="background-color: rgba(29, 134, 73, 0.6);">Des
                        Graphs
                        simplifiant la lecture des KPI LACQ</p>
                    <a href="{{ url('statistique') }}" class="btn btn-primary">Statistique</a>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center text-center">
            <div class="card text-center " style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="{{ asset('img/laboratoire-logo-design-template.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <p class="card-text w-100 rounded p-1"
                        style="background-color: rgba(29, 134, 73, 0.6);margin-top:12px;">Procesus & Activites </br>LACQ
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter">Analyse labo</button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center text-center">
            <div class="card text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto pt-3" style="width: 163px !important"
                    src="{{ asset('img/administration.png') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text w-100 rounded p-1"
                        style="background-color: rgba(29, 134, 73, 0.6);;margin-top:12px">Menu permettant d´auditer les
                        acces LACQ</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modalMenuAdmin">Administration</button>
                </div>
            </div>
        </div>
    </div>
</body>
