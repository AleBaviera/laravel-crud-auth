<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cats</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    <header>
      <h1>Header's Cats</h1>
      <div class="auth-box">
        @guest
          <h3><a href="{{ route('login') }}">LOGIN</a></h3>
          <h3><a href="{{ route('register') }}">REGISTER</a></h3>
        @else
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
              LOGOUT
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @endguest
      </div>
    </header>
    <div class="container">
      @yield('content')
    </div>
    <footer>
      <h1>Footer's Cats</h1>
    </footer>
