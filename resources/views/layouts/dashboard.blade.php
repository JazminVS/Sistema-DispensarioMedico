<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/icono.png')}}">

    <title>Doctor</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- CSS creados-->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <!-- ... -->
    <!-- Calendario en fechas -->
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <!-- ... -->
    <!-- select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <!-- select2-bootstrap4-theme -->
    <link href="{{asset('css/select2-bootstrap4.min.css')}}" rel="stylesheet">
    <!-- ... -->

    <!--botones font-asweome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- ... -->


</head>


<body>
<nav class="navbar navbar-expand navbar-dark fixed-top flex-md-nowrap p-0 shadow logo dilipa">
    <img src="{{asset('img/logo1.png')}}" class="navbar-brand col-sm-3 col-md-2 mr-0" alt="logo_dispensario" width="100px" height="100px">
    <div class="navbar-text mr-0 mr-md-3 offset-md-1 col-md-6">
        <h4 class="text-light">SISTEMA DE SALUD DISPENSARIO MÉDICO DILIPA</h4>
    </div>
    <ul class="navbar-nav text-light col-md-4 list-inline">
        @guest
            <li class="list-inline-item">
                <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            </li>
            @else
                <li class="list-inline-item nav-link">Bienvenido usuario(a) {{ Auth::user()->name }}</li>
                <li class="list-inline-item">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}<span data-feather="corner-down-left"></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                </li>
                @endguest
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar dilipa">
            <div class="sidebar-sticky">
                <div href="#" class="list-group-item flex-column align-items">
                    <div class="d-flex w-100">
                        <img src="{{asset('img/doctor.png')}}" alt="logo_dispensario" width="100" height="50">
                        <h6 class="mb-1">PERFIL DOCTOR<br></h6>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <small>Doctor</small>
                    </div>
                </div>
                <div class="list-group text-uppercase list-group-mine" >
                    <a href="home" class="list-group-item list-group-item-action">
                        <span data-feather="home"></span>
                        Dashboard
                    </a>
                    <a href="consulta" class="list-group-item list-group-item-action">
                        <span data-feather="heart"></span>
                        Consulta médica
                    </a>
                    <a href="citamedica" class="list-group-item list-group-item-action">
                        <span data-feather="calendar"></span>
                        Cita médica
                    </a>
                    <a href="procedimientos" class="list-group-item list-group-item-action">
                        <span data-feather="folder-plus"></span>
                        PROCEDIMIENTOS
                    </a>
                    <a href="pacientes" class="list-group-item list-group-item-action">
                        <span data-feather="user-plus"></span>
                        Pacientes
                    </a>
                    <a href="#" class="list-group-item">
                        <span data-feather="briefcase"></span>
                        MEDICAMENTOS
                    </a>
                </div>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 ">
            @yield('content')






        </main>
    </div>
</div>
</body>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
<!-- JQuery-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<!--select2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- Select2-bootstrap4-theme -->
<script src="{{asset('js/selector.js')}}"></script>


</html>
