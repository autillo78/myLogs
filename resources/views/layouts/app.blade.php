<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/myJs.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- font awesome 4 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar"> 
            
            <a id="sidebarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <div class="logout btn-grey">
                    <i class="fas fa-sign-out-alt"></i><br>
                    @auth
                    {{ Auth::user()->name }} 
                    @endauth
                </div>
            </a>

            <div class="dropdown-menu" aria-labelledby="sidebarDropdown">
                <a class="dropdown-item text-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            <ul class="list-unstyled components">
                <p>myLogs system</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-grey" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{__('Logs')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('sams.index')}}">S.A.M</a>
                              <a class="dropdown-item" href="#">Minoxidil</a>
                              <a class="dropdown-item" href="{{route('readings.index')}}">Reading</a>
                              <a class="dropdown-item" href="#">Exercice</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">S.I.</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Event</a>
                              <a class="dropdown-item" href="#">Trips</a>
                              <a class="dropdown-item" href="#">Thought</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Finances</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-grey" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{__('Items')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('books.index')}}">Books</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Person</a>
                              <a class="dropdown-item" href="#">Location</a>
                            </div>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication link only for sm-->
                        @auth
                        <li class="nav-item dropdown d-md-none">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth

                        <li class="nav-item dropdown d-none d-sm-none d-md-block">
                            @if (url()->previous())
                                <a href="{{url()->previous()}}" class="btn btn-grey" 
                                    data-toggle="tooltip" data-placement="left" title="{{url()->previous()}}">
                                    <i class="far fa-arrow-alt-circle-left"></i> Back
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- Page Content Holder -->
            <main class="py-4">
                <div class="card p-3">
                    @yield('content')
                </div>
            </main>



        </div>
    </div>
</body>

</html>