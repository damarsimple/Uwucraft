<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link active" aria-current="page" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link active" aria-current="page">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link active" aria-current="page">Register</a>
                </li>
                @endif
                @endauth
                @endif
                <li class="nav-item">
                    <a href="{{ url('/shop') }}" class="nav-link active" aria-current="page">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link active" aria-current="page">Server</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link active" aria-current="page">Status</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('navbar')
   
    @yield('content')

    <!-- Footer -->
    <footer class="container-fluid mt-5 p-lg-5 bg-dark text-white">
        <div class="row">
            <div class="col-sm">
                <h1 class="font-weight-bold text-capitalize">UWUCRAFT LTD</h1>
                <p>this project has been both fun and torturing me make sure to check me out on Damar Albaribin.</p>
            </div>
            <div class="col-sm">
                <a href="">About</a>
                <br>
                <a href="">About</a>
                <br>
                <a href="">About</a>
                <br>
                <a href="">About</a>
                <br>
                <a href="">About</a>
            </div>
            <hr>
            <p class="text-black text-hide">© 2020 UWUCRAFT LTD all right reserved</p>
        </div>
    </footer>
    <!-- Notification Components -->
    <div id="Notification"></div>
    <div id="Chat"></div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Scripts Here -->
    @yield('scripts')
</body>

</html>