<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BeautyBoB') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/96dba4a989.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/product.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/admin-index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

  </head>
  <body class="admin">
    <div class="container_header">
      <div class="left_header">
        <div class="name_header">
          <a class="name" href="{{ url('/catalog') }}">
            {{ config('app.name', 'BeautyBoB') }}
          </a>
        </div>
        <div class="logo_header">
          <img class="logo" src="{{ asset('img/icone-logo/logo.png') }}" draggable="false">
        </div>
      </div>
      <nav class="right_header">
        <ul class="user">
      <!-- Authentication Links -->
          @auth
          <li class="user firstname">
              {{ Auth::user()->firstname }}
          </li>
          <li class="user lastname">
              {{ Auth::user()->lastname }}
          </li>
          <div class="dropdown">
            <button class="dropbtn"><img class="arrow" src="{{ asset('img/icone-logo/arrow-down.png') }}" draggable="false"></img></button>
            <div class="submenu">
              @if (Auth::user()->admin == '1')
              <a href="{{ route('admin') }}">
                {{ __('Admin') }}
              </a>
              @endif
              <a href="{{ route('profil') }}">
                {{ __('Profil') }}
              </a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
            </div>
          </div>
          <form class="nothing" id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
          <li class="user icons">
            <a href="{{ route('Cart') }}">
              <img class="icon" src="{{ asset('img/icone-logo/cart.png') }}" draggable="false"></img>
              <span id="items" class="items">
              </span></a>
          </li>
          @endauth
        </ul>
      </nav>
    </div>
    <div class="container-menu">
      <nav class="vertical-menu">
        <ul class="menu">
          <p class="menu-title">Product</p>
          <a href="{{ url('/admin/product') }}">
            <li class="submenu-title">
              See
            </li>
          </a>
          <a href="{{ url('/admin/product/add') }}">
            <li class="submenu-title">
              Add
            </li>
          </a>
        </ul>
        <ul class="menu">
          <p class="menu-title">User</p>
          <a href="{{ url('/admin/user') }}">
            <li class="submenu-title">
              See
            </li>
          </a>
        </ul>
      </nav>
    </div>
    <main class="content">
      @yield('content')
    </main>
  </body>
  </html>
