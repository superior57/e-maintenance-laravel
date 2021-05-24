
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<!--     <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
 -->
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="{{ asset('js/Chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.js/samples/utils.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr-rtl.css') }}" />

    <script src="{{ asset('jquery/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('dist/sweetalert2.js') }}"></script>
    <script src="{{ asset('bootstrap-toastr/toastr.js') }}"></script>

<!--     <link href="{{ asset('bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
 -->

</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-dark navbar-dark" style="position: ; width: 100%;">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav " id="ul_formedit" style="display: none;">
                        <a class="nav-link" href="{{ url('/formedit') }}">Form Edit</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_pcview" style="display: none;">
                        <a class="nav-link" href="{{ url('/pcview') }}">PC View</a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_users" style="display: none;">
                        <a class="nav-link" href="{{ url('/users') }}">Users</a>   
                    </ul> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item ">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>      </li>                         

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            
                        @endguest
                    </ul>
                </div>
            </div> 
        </nav>

        <main class="py-4">
            <div class="container ">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ URL::to('/') }}/" defer></script>    

<script type="text/javascript">

        
    </script>
</body>
</html>
