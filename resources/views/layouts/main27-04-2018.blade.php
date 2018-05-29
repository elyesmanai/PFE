<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/datatables.min.js') }}" defer></script>
    <script src="{{ asset('js/pdfmake.min.js') }}" defer></script>
    <script src="{{ asset('js/vts_fonts.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
     


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                     <a class="dropdown-item" href="">
                                        {{ __('settings') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-fluid">
            <div class="row">
                <div class="col-lg-2" id="sidebarmenu">
                        <div><a href="home">Acceuil</a></div> 
                        
                    @if(Auth::user()->role=="admin")
                         <div> <a href="convocations">Convocations</a></div>
                        <div> <a href="feedbacks">Feedbacks</a></div>
                        <div><a href="meetings">Réunions</a></div>
                        <div><a href="reports">Rapports</a></div>
                        <div><span>Tableaux</span></div>
                        <div><a style="padding-left: 20px;" href="/tableaux_eval">Evaluations</a></div> 
                        <div><a style="padding-left: 20px;" href="/tableaux_finances">Finances</a></div> 
                        <div><a style="padding-left: 20px;" href="/tableaux_tech">Techniques</a></div>  
                        <div><a href="users">Utilisateurs</a></div> 
                    @elseif(Auth::user()->role=="finacial" || Auth::user()->role=="technician")
                        <div><a href="tables">Tableaux</a></div>

                    @elseif(Auth::user()->role=="delegate" || Auth::user()->role=="civil_society")
                       <div> <a href="convocations">Convocations</a></div>
                        <div> <a href="feedbacks">Feedbacks</a></div>
                    @endif

                    @if(Auth::user()->role=="civil_society")
                        <div><a href="plan_com">Plan Communication</a></div>
                    @endif
                </div>
                <div class="col-lg-10">
                     @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
   
</html>
